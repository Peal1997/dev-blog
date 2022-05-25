<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function add()
    {
        return view('create');
    }
    public function store(Request $request)
      {
          //form validation
          $this -> validate($request, [
              'name' => 'required',
              'email' => 'required|email|unique:staff',
              
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
            $file_name = NULL;
          }
         staff::create([
            'name'  => $request -> name,
            'skill' => $request -> skill,
            'email' => $request -> email,         
            'experience' => $request -> exp,         
            'image' => $file_name,
         ]);
         //return back
         return redirect()-> route('dashboard');
      }

      //show all team member
      public function index()
      {
          $data = staff::all();
          return view('members',[
              'all_data' => $data,
          ]);
        }

        public function contact()
        {
            return view('contact');
        }
        public function show($id)
        {
            $data = staff::find($id);
            return view('about_me',[
                  'single_data' => $data
            ]);
        }
      
}
