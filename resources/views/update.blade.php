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
                
                <form action="{{route('user.edit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="cid" value="{{$all_data ->id}}">
                    <div class="form-group">
                        <label class = "form-label" for="name">Name </label>
                        <input name="name" type ="text" id ="name" value="{{$all_data->name ?? ''}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="email">Email </label>
                        <input name="email" type ="text" id ="email" value="{{$all_data->email ?? ''}}" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label class = "form-label" for="skill">skill</label>
                        <input name="skill" type ="text" id ="skill" value="{{$all_data->skill ?? ''}}" class="form-control">
                    </div>
                   
                    <br>
                    <div class="form-group">
                       <input name="photo" type ="file" > 
                       
                    </div>
                    <div class="form-group">
                      <textarea name="exp" id="exp" placeholder="Edit experience">{{$all_data->experience}}</textarea>
                       
                    </div>

                    <br>
                    <img clss="card-image" src="{{url('images/' . $all_data -> image)}} " alt="">
                    <div class="form-group mt-5">
                       <input class ="btn btn-primary" name="submit" type ="submit" valeu="submit" > 
                       
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
