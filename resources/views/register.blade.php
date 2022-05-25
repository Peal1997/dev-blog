@extends('layouts.layout')
@section('main')
<div class="user-form w-50 mx-auto my-5">
    {{-- <a class="btn btn-primary" href="{{route('student.index')}}" >All teachers</a> --}}
        <div class="card shadow ">
       
            <div class="card-header">
                <h1 calss ="card-title">Create teachers account</h1>
            </div>
            <div class="card-body">
                <hr>
                @if ($errors -> any())


                @foreach ($errors -> all() as $err)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{$err}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endforeach
                
                
                    
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
                <form action="{{route('register.action')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class = "form-label" for="name">Name </label>
                        <input name="name" type ="text" id ="name" value="{{old('name')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="email">Username</label>
                        <input name="username" type ="text" id ="username" value="{{old('username')}}" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="salary">Password</label>
                        <input name="password" type ="password" id ="password" value="{{old('password')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="salary">Confirm Password</label>
                        <input name="password_confirmation" type ="password" id ="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
                    </div>
                   
                   
                    <div class="form-group">
                       <input class ="btn btn-primary mt-2" name="submit" type ="submit" value="Register" > 
                       
                    </div>
                   
                </form>
            </div>
        </div>

    </div>
@endsection