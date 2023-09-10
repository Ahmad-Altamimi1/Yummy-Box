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
<div class="hero overlay" style="background-image: url('{{ asset('images/img_v_8-min.jpg') }}')">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="heading text-white mb-2" data-aos="fade-up">About Us</h1>
                <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
                <p data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="btn btn-primary me-4">Donate Now</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section sec-about">
    <div class="container">
        <div class="row g-5 justify-content-between">
            <div class="col-lg-6 has-bg" data-aos="fade-right">
                <img src="{{ asset('images/hero_2.jpg') }}" alt="Image" class="img-fluid img-box-shadow rounded">

            </div>
            <div class="col-lg-4 align-self-center" data-aos="fade-left" data-aos-delay="100">
                <span class="subheading mb-3">About</span>
                <h2 class="heading mb-4">History</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p>
                    A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
        </div>
    </div>
</div>

<div class="section sec-features bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4" data-aos="fade-up">
                <span class="subheading mb-3">The Team</span>
                <h2 class="heading">Who We Are</h2>
            </div>
            <div class="col-lg-6 text-start" data-aos="fade-up" data-aos-delay="100">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="features-slider-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="features-slider" id="features-slider">

                <div class="item">

                    <div class="feature bg-color-1">
                        <img src="{{ asset('images/person_1.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">James Scott</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <a href="#" class="more d-block">Learn More</a>
                    </div>

                </div>

                <div class="item">

                    <div class="feature bg-color-2">
                        <img src="{{ asset('images/person_2.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Hannah White</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <a href="#" class="more d-block">Learn More</a>
                    </div>

                </div>

                <div class="item">

                    <div class="feature bg-color-3">
                        <img src="{{ asset('images/person_3.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Amy Perez</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <a href="#" class="more d-block">Learn More</a>
                    </div>

                </div>

                <div class="item">

                    <div class="feature bg-color-4">
                        <img src="{{ asset('images/person_4.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Brian Nance</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <a href="#" class="more d-block">Learn More</a>
                    </div>

                </div>

					<div class="item">
						<div class="feature bg-color-5">
							<img src="{{ asset('images/person_4.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

							<h3 class="mb-0">Stephanie Kenney</h3>
							<span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
							<p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

							<a href="#" class="more d-block">Learn More</a>
						</div>

					</div>

					<div class="item">

						<div class="feature bg-color-6">
							<img src="{{ asset('images/person_3.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

							<h3 class="mb-0">Amy Perez</h3>
							<span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
							<p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

							<a href="#" class="more d-block">Learn More</a>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>

	<div class="section ">
		<div class="container">
			<div class="row">
				<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
					<div id="features-slider-nav">
						<button class="btn btn-primary" class="prev" data-controls="prev">Prev</button>
						<button class="btn btn-primary" class="next" data-controls="next">Next</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-aos="fade-up">
					<div class="vision">
						<h2>Our Vision</h2>
						<p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
						<p><a href="#" class="link-underline">Learn More</a></p>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="mission">
						<h2>Our Mission</h2>
						<p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
						<p><a href="#" class="link-underline">Learn More</a></p>
					</div>
				</div>
			</div>		
		</div>		
	</div>


	<div class="section sec-instagram pb-0">
		<div class="container mb-5">
			<div class="row align-items-center">
				<div class="col-lg-3" data-aos="fade-up">
					<span class="subheading mb-3">Instagram</span>
					<h2 class="heading">We Are In Instagram</h2>
				</div>
				<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
					<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, aperiam sint voluptatum? Molestiae debitis, ipsum, rem ipsa voluptatum cupiditate quaerat!</p>
				</div>
			</div>
		</div>

		<div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
			<div class="instagram-slider" id="instagram-slider">

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src=" {{ asset('images/img_v_8-min.jpg') }}" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src=" {{ asset('images/img_v_2-min.jpg') }}" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src=" {{ asset('images/img_v_3-min.jpg') }}" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="{{ asset('images/img_v_4-min.jpg ') }}" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src=" {{ asset('images/img_v_5-min.jpg') }}" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src=" {{ asset('images/img_v_6-min.jpg') }}" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src=" {{ asset('images/img_v_7-min.jpg') }}" alt="Image" class="img-fluid">		
					</a>
				</div>


			</div>
		</div>

	</div>

	@endsection