@extends('layouts.layout')
@section('header')
    <!-- header -->
    <header class="header" style="background-image: url({{asset('images/team.jfif')}});">
      <div class="header-text">
        <h1>Explendid!!!</h1>
        <h4>We are a team of Developer</h4></h4>
      </div>
      <div class="overlay"></div>
    </header>
@endsection
@section('main')
    <!-- main -->
    <h2 class="text-center m-5 hearder-title">Our recent project</h2>
    <div class="container">
      <div class="row">
        @forelse ($all_post as $item)
        <div class="col-md-4 my-5">
          {{-- <div class="card shadow">
             <div class="card-body"> --}}
              <img style="width:300px; height:300px" src="{{url('images/post_img/',$item->image)}}" alt="" />
              <p>
              {{$item->created_at->diffForHumans()}}<br>
                <a href="">Developed by{{$item ->auther}}</a>
              </p>
              <h4 style="font-weight: bolder">
                <a href="{{url($item ->url)}}"
                  >{{$item ->title}}</a
                >
              </h4>
             {{-- </div>
          </div> --}}
        </div>
        @empty
        <p class="text-center">No record found</p>
        @endforelse
      </div>
    </div>  
    {{-- <h2 class="header-title">Our recent work</h2>
    <main class="container">   
      <div class="row">
        @forelse ($all_post as $item)
        <div class="col-md-3">
          
          <section class="cards-blog latest-blog">
            <div class="card-blog-content">
              <img style="width:300px; height:300px" src="{{url('images/post_img/',$item->image)}}" alt="" />
              <p>
                {{$item->created_at->diffForHumans()}}
                <a href="" style="float: right">Developed by{{$item ->auther}}</a>
              </p>
              <h4 style="font-weight: bolder">
                <a href="{{url($item ->url)}}"
                  >{{$item ->title}}</a
                >
              </h4>
            </div>
        @empty
            
        
        </div>
        @endforelse
      </div> --}}
      
      {{-- <section class="cards-blog latest-blog">
        <div class="card-blog-content">
          <img style="width:500px; height:500px" src="{{asset('images/whats.jpg')}}" alt="" />
          <p>
            2 hours ago
            <a href="" style="float: right">devloped by Peal Hasan</a>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html"
              >Whats app clone</a
            >
          </h4>
        </div>

        <div class="card-blog-content">
          <img style="width:500px; height:500px" src="{{asset('images/ecommerce-website.jpg')}}" alt="" />
          <p>
            23 hours ago
            <span style="float: right">Developed by Anik Rez</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Mobile E-commerce platform</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img style="width:500px; height:500px" src="{{asset('images/login-fb.jpg')}}" alt="" />
          <p>
            2 days ago
            <span style="float: right">Developed by Shahriar Islam</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html"
              >Facebook clone</a
            >
          </h4>
        </div>

        <div class="card-blog-content">
          <img style="width:500px; height:500px;" src="{{asset('images/grade.png')}}" alt="" />
          <p>
            3 days ago
            <span style="float: right">Developed by Riad Forazee</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Gradding policy</a>
          </h4>
        </div> --}}
      </section>
    </main>
@endsection