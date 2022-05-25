<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\staff;
use App\Models\user;
use App\Models\tb_user;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class userController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('register');
    }
    public function register_action(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User([
           'name' => $request -> name,
           'username' => $request -> username,
           'password' => Hash::make($request-> password),

        ]);
        $user -> save();
        return redirect() ->route('login')->with('success','Registration success. Please login');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request -> username, 'password' => $request -> password])) {
            $request->session()->regenerate();
            return redirect()-> route('dashboard')->with('success','WellCome to Dashboard');
           
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);

        //check email
    //    $userInfo = tb_user::where('email','=' , $request->email)->first();
    //    if($userInfo) {
    //        return back() -> with('fail','Unrecognized email');
    //    }else {
    //        //check password
    //        if(Hash::check($request->password, $userInfo->password)) {
              
    //          $request ->session()->put('LoggedUser',$userInfo->id);
    //          return redirect()->route('dashboard');

    //        }else {
    //            return back() ->with('success', 'Incorrect password');
    //        }
    //    }
        
    }
    public function index()
    {   
        $data = staff::all();
        return view('index',[
            
            'all_staff' => $data,
        ]);
    }
    public function destroy($id)
    {
        $data = staff::find($id);
        $data -> delete();
        return back() -> with('success','Developer deleted succesfully');
    }
    
    // public function update($id)
    // {
    //    $row = DB::table('staff')
    //    ->where('id',$id)
    //    ->first();

    //    $data = [
    //       'info' => $row
    //    ];
    //    return view('update',$data);
    // }
    public function update($id)
    {
        $data = staff::find($id);
        return view('update',[
            'all_data' => $data
        ]);
    }
    public function edit(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            
        ],[

          'name.required' => 'নামের ঘরটি পূরণ করুন',
          'email.required' => 'ইমেইলের  ঘরটি পূরণ করুন ',           
          'email.unique' => 'ইমেইলটি নিয়ে নেওয়া হয়েছে ',
          'email.email' => 'ইমেইলটি সঠিক নয়',
       ]);
       //image upload
        if($request -> hasfile('photo')) {
               $img = $request -> file('photo');
               $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
               $img -> move(public_path('images'),$file_name);
        
        }else {
          $file_name = Null;
        }
      
        $updating = DB::table('staff')
        ->where('id',$request -> input('cid'))
        ->update([
            'name'  => $request -> name,
            'skill' => $request -> skill,
            'email' => $request -> email,         
            'experience' => $request -> exp,         
            'image' => $file_name,
        ]);
        return back() ->with('success','data succesfull');
    }

    public function post_dashboard()
    {
        $data = post::all();
        return view('post_dashboard',[
            'all_post' => $data
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return  redirect('/');
    }
    
}
