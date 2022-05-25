@extends('layouts.layout')
@section('main')
<div class="user-form w-50 mx-auto my-5">
    {{-- <a class="btn btn-primary" href="{{route('student.index')}}" >All teachers</a> --}}
        <div class="card shadow ">
       
            <div class="card-header">
                <h1 calss ="card-title">Log in</h1>
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
                <form action="{{route('login.action')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class = "form-label" for="username">Username</label>
                        <input name="username" type ="text" id ="username" value="{{old('username')}}" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="password">Password</label>
                        <input name="password" type ="password" id ="password" value="{{old('password')}}" class="form-control">
                    </div>
                   
                    <div class="form-group">
                       <input class ="btn btn-primary mt-3" name="submit" type ="submit" value="login" > 
                       <a class="btn btn-danger mt-3" href="{{route('register')}}">Back</a>
                       
                    </div>
                   
                </form>
            </div>
        </div>

    </div>
@endsection