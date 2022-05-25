@extends('layouts.layout')
@section('main')


<div class="single-user text-center">
    <img class="mt-5" style="height:350px;width:500px;" src="{{url('images/' . $single_data -> image)}}" alt="">
    <div class="header-text">
      <h1>{{$single_data -> skill}}</h1>
      <p>{{$single_data -> experience}}</p>
    </div>
</div>
{{-- team members --}}
@section('slider')
<section class="client-slider ">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="our-client owl-carousel">
          <img style="width:150px;height: 150px" src="{{url('images/' . $single_data -> image)}}">
          <img style="width:150px;height: 150px" src="./assets/img/buet.png">
          <img style="width:150px;height: 150px" src="./assets/img/dmc.png">
          <img style="width:150px;height: 150px" src="./assets/img/ju.jpg">
          <img style="width:150px;height: 150px" src="./assets/img/jnu.png">
          <img style="width:150px;height: 150px" src="./assets/img/nu.jpg">
        </div>
      </div>
    </div>
  </div>
</section><br>
<center><a class="btn btn-danger"href="{{route('dashboard')}}">Back</a></center>
<
@endsection



@endsection