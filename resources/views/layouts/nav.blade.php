<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Volunteer work in training and education " />
    <meta name="keywords" content="Volunteer training  education" />

    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap')}}"
        rel="stylesheet">

    <script src="{{url('https://kit.fontawesome.com/659ed253a5.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ url('css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href=" {{ url('css/glightbox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href=" {{ url('css/home.css') }} ">



    <title>Volunteer </title>
    <style>
        .logo-image {
            max-width: 100px;
            /* Adjust the width as needed */
            height: auto;
            /* Maintain the aspect ratio */
            vertical-align: middle;
            /* Align the image vertically */
            margin-right: 10px;
            /* Add some space between the image and text */
        }

        /* Style for the logo text */
        #logo {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: x-large;
            text-decoration: none;
            /* Remove underline from the link */
            color: white;

        }
    </style>

</head>


<body>



    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center" style="display: flex; width: 100%;">
                        <div class="col-4 logos">
                            <a href="#" id='logo' class="logo m-0 float-start text-white">
                                <img src="images/logo1.png" alt="Logo Image" class="logo-image">
                                TechHub
                            </a>
                        </div>
                        <div class="col-8 text-end">

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="{{ request()->is('home*') ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>

                                <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="about">About</a>
                                </li>
                                <li class="{{ request()->is('news*') ? 'active' : '' }}"><a
                                        href="{{ route('news') }}">News</a></li>
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                                <li class="has-children">
                                    @if (Auth::check())
                                        <a href="#">
                                            <div><i class="fa-solid fa-user " style="color: #fafafa;"></i>
                                                {{ Auth::user()->name }}</div>
                                            <ul class="dropdown">
                                                <li><a href="{{route('profile.show')}}">profile</a></li>
                                                <li>
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit">{{ __('Log Out') }}</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </a>
                                    @else
                                <li class="{{ request()->is('login*') ? 'active' : '' }}"><a
                                        href="{{ route('login') }}">Login</a></li>
                                <li class="{{ request()->is('register*') ? 'active' : '' }}"><a
                                        href="{{ route('register') }}">Register</a></li>
                                @endif
                                </li>
                            </ul>

                        </div>
                        <div class="text-end" style="position: fixed;right: 20px; top: 20px;">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
