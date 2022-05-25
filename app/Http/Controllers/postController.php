<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;


class postController extends Controller
{
    public function create()
    {
        return view('create_post');
    }
    public function create_post(Request $request)
    {
        $this -> validate($request,[
            'title' => 'required',
            'auther' => 'required',
            'url' => 'required',
            'image' => 'required',
        ],[
            'title.required' => 'Title can not be empty',
            'auther.required' => 'auther can not be empty',
            'url.required' => 'url can not be empty',
            'image.required' => 'image can not be empty'
        ]);
        
        //image upload
        if($request -> hasFile('photo')) {
            $img = $request -> file('photo');
            $file_name = md5(time() . rand()) . '.' . $img -> clientExtension();
            $img -> move(public_path('./images/post_img/'),$file_name);
        } else {
            $file_name = NULL;
        }
        //Upload data
        post::create([
            'title' => $request -> title,
            'auther' => $request -> auther,
            'url' => $request -> url,
            'image' => $file_name,

        ]);
        return redirect()->route('post.dashboard') -> with('success','Upload successful');
    }
    public function post()
    {
        $data = post::all();
        return view('welcome',[
           'all_post' => $data
        ]);
    }

    public function destroy($id)
    {
       $data = post ::find($id);
       $data ->delete();
       return back() ->with('success','Data has been deleted successful');
    }
}
