@extends('layouts.master')
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
	



@section('title','about')

	<link rel="stylesheet" href="../css/tiny-slider.css">
	{{-- <link rel="stylesheet" href="../css/aos.css"> --}}
	<link rel="stylesheet" href="../css/flatpickr.min.css">
	<link rel="stylesheet" href="../css/glightbox.min.css">
	<link rel="stylesheet" href="../css/style.css">



<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>



@section('content')
<style>
    .site-nav {
        background: red;
		position: sticky;	
        top: 0;
    }
    .all{
        height: 100vh;
margin: 0 10%;
background: #eee;

padding:60px; 
margin-top: 4%;
    }
    .left{
        width: 60%;
    }
    .left img{
width: 100%;
    }
	.right{
		color: #ffc85c;
		color: #59886b;
        width: 30%;
padding-left: 8%;
	}
	.rightandleft{
display: flex;
		/* display: grid;
grid-auto-columns: 40% 40%; */
	}
</style>



<div class="all">
	<h3>{{ $products->name }}</h3>
<div class="rightandleft">
    <div class="left">

			{{-- {{$products->image}} --}}
        <img src="../images/hero_1.jpg" alt="">

    </div>
<div class="right">

{{-- <p>{{ $products->breif }}</p> --}}
<p>Hours of instruction:{{ $products->period }}</p>
<p>Start in{{ $products->time }}</p>
<p>location:{{ $products->description2 }}</p>
<p>{{ $products->description3 }}</p>
<p>{{ $products->location }}</p>
<p>{{ $products->total }}</p>
@if ($diffInMinutes<60)
<p> posted befor {{$diffInMinutes}} Minutes</p>
@endif
@if ($diffInMinutes>60 &&$diffInHours <24)
<p> posted befor {{$diffInHours}} Hours</p>
@endif
@if ($diffInMinutes>60 && $diffInHours >=24)
<p> posted befor {{$diffInDays}} days</p>
@endif
@auth
	
@if ( Auth::user()->id ==false)
	<div> you must log in</div>
@endif
@if ( Auth::user()->id ==true)
                                        <div>{{ Auth::user()->id }}</div>
	
@endif

@endauth


{{-- <p>{{ $products->time }}</p> --}}


</div>
</div>

</div>





















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Volunteer work in training and education " />
    <meta name="keywords" content="Volunteer training  education" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/single.css">
    <title>single</title>
</head>

<body>



    <section class="container">

        <div class="header-container">
            <img src="images/hero_1.png" alt="">
            <h1>{{ $products->name }}</h1>
        </div>

        <div class="inside-container">

            <div class="single-product-left">

                <div class="single-product-left-first-div">
                    <img src="../images/hero_1.png" alt="">
                </div>

                <div class="single-product-left-second-div">
                    <div class="single-product-left-second-div-image">
                        <div>
                            <img src="{{ $products->image }}" alt="">
                        </div>
                        <h3><a href="../images/hero_1.jpg">Lorem ipsum dolor sit amet.</a></h3>
                    </div>
                    <div>
                        <a href="">Lorem.</a>
                    </div>
                </div>

                <h4 class="single-product-left-first-h4">وصف الفرصة</h4>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, voluptatibus! Vel, quis ratione
                    fugiat ducimus aperiam itaque tenetur natus modi iure velit minima reiciendis quasi maiores, aliquam
                    veritatis qui illum cupiditate aut consequatur perferendis impedit at atque quas. Pariatur quod sit
                    nulla velit sequi. Eligendi vero porro vel nulla deserunt.
                </p>
            </div>



            <div class="single-product-right">
                <div class="single-product-right-h1">
                    <h1>time</h1>
                </div>
                <div class="single-product-right-first">
                    <h4>Lorem, ipsum. <span>2023/10/15</span> to <span>2023/12/12</span> day <span>saturday</span> </h4>
                    <h4>hours to <span>9:00</span> to <span>16:00</span></h4>
                </div>

                <div class="single-product-right-second">
                    <h4><a href="">المهارات المطلوبة</a></h4>
                    <p>غير محدد</p>
                </div>

                <div class="single-product-right-second">
                    <h4><a href="">الفئة العمرية </a></h4>
                    <p>المرحلة الجامعية، بعد المرحلة الجامعية </p>
                </div>


                <div class="single-product-right-third">
                    <div>
                        <h1>167</h1>
                        <p>تحت الموافقة</p>
                    </div>
                    <div>
                        <h1>200</h1>
                        <p>العدد المطلوب</p>
                    </div>

                </div>

                <button class="single-product-right-button">submit</button>


                <h4 class="single-product-right-h4">شارك الفرصه</h4>

            </div>




        </div>


    </section>

    @endsection
   
@extends('pages.cliker')

</body>

</html>
