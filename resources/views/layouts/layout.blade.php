<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peal Hasan</title>
    <!-- Css -->
    {{-- <link rel="stylesheet" href="style.css" /> --}}
    
    <script src="https://kit.fontawesome.com/c135605d37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('./css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('./css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./style.css') }}" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @yield('head')

    {{-- Tailwind CDN --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css"> --}}

    {{-- Bootstrap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"></head> --}}

<body>
    <div id="wrapper">
        <!-- header -->
        @yield('header')

        <!-- sidebar -->
        <div class="sidebar">
            <span class="closeButton">&times;</span>
            <p class="brand-title"><a href="">Explendid</a></p>

            <div class="side-links">
                <ul>
                    <li><a class="" href="/">Home</a></li>
                    <li><a class="" href="{{route('members.index')}}">Members</a></li>
                    
                    <li><a class="" href="{{route('members.contact')}}">Contact</a></li>
                   
                    
                   
                    @guest
                    <li><a class="" href="{{route('register')}}">Register</a></li>
                    <li><a class="" href="{{route('login')}}">login</a></li>
                    @endguest
                    
                    
                    @auth
                    <li><a class="" href="{{route('staff.add')}}">Add new member</a></li>
                    <li><a class="" href="{{route('create.post')}}">Add new git</a></li>
                    <li><a class="" href="{{route('logout')}}">Logut</a></li>
                    @endauth
                   
                    
                    
                </ul>
            </div>

            <!-- sidebar footer -->
            <footer class="sidebar-footer">
                <div>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>

                <small>&copy 2021 Peal Hasan</small>
            </footer>
        </div>
        <!-- Menu Button -->
        <div class="menuButton">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- main -->
        @yield('main')
        @yield('slider')
        <!-- Main footer -->
        <footer class="main-footer">
            <div>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
            <small>&copy 2022 Peal Hasan</small>
        </footer>
    </div>


    <!-- Click events to menu and close buttons using javaascript-->
    <script>
        document
            .querySelector(".menuButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "100%";
                document.querySelector(".sidebar").style.zIndex = "5";
            });

        document
            .querySelector(".closeButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "0";
            });
            document
            $('.delete_btn').click(function(){
            
            let conf =  confirm('Are you sure ??');
            if(conf){
                return true;
            }else{
                return false;
            }
          });
    </script>
    <script src ="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    
    <script src="./js/scripts.js"></script>
    @yield('scripts')
</body>

</html>
