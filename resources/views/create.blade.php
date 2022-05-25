@extends('layouts.layout')
@section('main')
<div class="user-form w-50 mx-auto my-5">
    {{-- <a class="btn btn-primary" href="{{route('student.index')}}" >All teachers</a> --}}
        <div class="card h-25 shadow ">
       
            <div class="card-header">
                <h1 calss ="card-title">Create Staff account</h1>
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
                <form action="{{route('staff.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class = "form-label" for="name">Name </label>
                        <input name="name" type ="text" id ="name" value="{{old('name')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="email">Email </label>
                        <input name="email" type ="text" id ="email" value="{{old('email')}}" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="skill">skill</label>
                        <input name="skill" type ="text" id ="skill" value="{{old('skill')}}" class="form-control">
                    </div>
                   
                    <br>
                    <div class="form-group">
                       <input name="photo" type ="file" > 
                       
                    </div>
                    <div class="form-group">
                      <textarea name="exp" id="exp">Experience</textarea>
                       
                    </div>

                    <br>
                   
                    <div class="form-group">
                       <input class ="btn btn-primary" name="submit" type ="submit" valeu="submit" > 
                       <a class="btn btn-danger" href="{{route('dashboard')}}">Back</a>
                    </div>
                    
                </form>
                
            </div>
        </div>

    </div>
@endsection
