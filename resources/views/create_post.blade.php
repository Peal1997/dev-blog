@extends('layouts.layout')
@section('main')
<div class="user-form w-50 mx-auto my-5">
    {{-- <a class="btn btn-primary" href="{{route('student.index')}}" >All teachers</a> --}}
        <div class="card h-25 shadow ">
       
            <div class="card-header">
                <h1 calss ="card-title">Create new post</h1>
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
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class = "form-label" for="name">Title</label>
                        <input name="title" type ="text" id ="title" value="{{old('title')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="email">Auther</label>
                        <input name="auther" type ="text" id ="auther" value="{{old('auther')}}" class="form-control">
                        
                    </div><br>
                    <div class="form-group">
                        <input name="photo" type ="file" > 
                        
                     </div><br>
                    <div class="form-group">
                        <label class = "form-label" for="skill">URL of project</label>
                        <input name="url" type ="text" id ="url" value="{{old('url')}}" class="form-control">
                    </div>
                   
                    <br>
                    

                    <br>
                   
                    <div class="form-group">
                       <input class ="btn btn-primary" name="submit" type ="submit" valeu="submit" > 
                       <a class="btn btn-danger" href="{{route('post.dashboard')}}">Back</a>
                       
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

