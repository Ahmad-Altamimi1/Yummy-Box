
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



	<h3>{{ $products->name }}</h3>
<div class="rightandleft">
    <div class="left">

			{{-- {{$products->image}} --}}

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

    
   

