<!-- /*
* Template Name: Volunteer
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
@extends('layouts.master')


@section('title','about')




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






@endsection
