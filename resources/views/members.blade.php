@extends('layouts.layout')
@section('main')

<h2 class="text-center mt-5">All Members</h2>
    <div class="container my-5">
        <div class="row">
        @forelse ($all_data as $data)
        
            <div class="col-md-3 my-5">
                <div class="card shadow h-100 mt-3">
                    <div class="card-body">                      
                        <img clss="card-image" src="{{url('images/' . $data -> image)}} " alt="">
                        <h2>{{$data -> name}}</h2>
                        <h3>{{$data -> email}}</h3>
                        <p>{{$data -> skill}}</p>
                     
    
                    </div>
                    <div class="card-foter">
                       <a class="btn btn-success" href="{{route('staff.show',$data ->id)}}" >About Me</a>
                    </div>
                    
                </div>
            </div>
        @empty
            <p class="text-center">No record found</p>
       
        @endforelse   
    </div>   
    </div>
@endsection