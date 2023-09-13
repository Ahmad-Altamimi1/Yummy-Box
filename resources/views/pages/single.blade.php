@extends('layouts.master')


@section('title', 'Project')



<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>

@section('content')
    <x-app-layout>

        <div class="hero overlay height:300px" style="background-image: url({{ $products->image }}); important">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="heading text-white mb-2" data-aos="fade-up">{{ $products->name }}</h1>
                        {{-- <p data-aos="fade-up"  data-aos-delay="100">
					<a href="#" class="btn btn-primary me-4">Donate Now</a> 
				</p>		 --}}

                    </div>


                </div>
            </div>
        </div>

        <section class=" mb-3 container inline-block" style="color: black; ">

            <br><br>

            <div class="inside-container row g-5">


                <div class="col-8">
                    <div class="single-product-left">



                        <div class="single-product-left-second-div ">
                            <div class="single-product-left-second-div-image">
                                @if ($diffInMinutes < 60)
                                    <p> posted before {{ $diffInMinutes }} Minutes</p>
                                @endif
                                @if ($diffInMinutes > 60 && $diffInHours < 24)
                                    <p> posted before {{ $diffInHours }} Hours</p>
                                @endif
                                @if ($diffInMinutes > 60 && $diffInHours >= 24)
                                    <p> posted before {{ $diffInDays }} days</p>
                                @endif

                                <h3><a href="../images/hero_1.jpg">Below you will see the details:</a></h3> <br>
                                @foreach ($products as $product)
                                    @php
                                        $totalsproduct = 0;
                                        $percant = 0;
                                    @endphp
                                 
                                    @foreach ($volanters as $volanter)
                                        @if ($volanter->product_id== $products['id'])
                                            @php
                                                $totalsproduct += $volanter->amount;
                                        
                                          
                                                
                                                $percant = (int) (($totalsproduct / $products->total) * 100);
                                                
                                            @endphp
                                        @endif
                                    @endforeach
                                @endforeach

                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: <?php echo $percant; ?>%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> <?php echo $percant; ?>%</div>
                                </div>
                                <div class="d-flex mb-4 justify-content-between amount">
                                    <div>@php
                                        echo "$" . $totalsproduct;
                                    @endphp
                                    </div>

                                    <div>${{ $products->total }}</div>
                                </div>
                                {{-- <div> --}}
                            </div>

                            <div style="display:block;">

                                <div>
                                <i class="fa-solid fa-location-dot fa-2xl" style="color: #318c5d;"> </i> <span>
                                    {{ $products->location }}</span>
                           </div><br><br>
                           <div>
                                <i class="fa-regular fa-clock fa-2xl" style="color: #f3ec20;"> </i><span> Start
                                    at{{ $products->time }}</span>
                                </div><br><br>
                                <div>
                                <i class="fa-regular fa-calendar-days fa-2xl" style="color: #fd9d17;"> </i> <span> Days of
                                    instruction:{{ $products->period }}</span>
                                </div>
                            </div>
                        </div>
                        <hr>


                    </div>
                    <div>
                        <h1>Role</h1>
                        <p>About the job and it’s activities</p>

                        <div class="single-product-right">
                            <div class="single-product-right-h1">
                                <h3 class="single-product-left-first-h4">About </h3>

                                <p>
                                    {{ $products->description2 }}
                                </p>

                                <h3 class="single-product-left-first-h4">Responsibilities </h3>

                                <p>
                                    {{ $products->description3 }}
                                </p>
                                </div>
                                <div></div>
                                <h3 class="single-product-left-first-h4">Prosses </h3>

                                <p>
                                <ul  style="list-style-color: green;list-style-type: disc">
                                    <li>Apply Online: Fill out our quick online application form, indicating your interest
                                        in mentoring for the Front-End Foundations project.</li>
                                    <li>Resume Submission: Upload your CV or resume to showcase your skills and experience
                                        in web development.</li>
                                    <li>Interview and Orientation: After reviewing your application, we'll schedule a brief
                                        interview to discuss your availability and expectations. Attend an orientation to
                                        get acquainted with our platform and guidelines.</li>
                                    <li>Mentor Match: Once approved, we'll match you with learners eager to participate in
                                        the Front-End Foundations project.</li>
                                    <li>Start Mentoring: Begin your volunteer journey by mentoring and sharing your
                                        expertise with aspiring web developers.</li>
                                </ul>

                                
                            </div>


                                </p>
                                <div style="text-align:end">
                                    {{-- <p>{{ $products->total }}</p> --}}
                                    {{-- @if ($diffInMinutes < 60)
                      <p> posted before {{$diffInMinutes}} Minutes</p>
                      @endif
                      @if ($diffInMinutes > 60 && $diffInHours < 24)
                      <p> posted before {{$diffInHours}} Hours</p>
                      @endif
                      @if ($diffInMinutes > 60 && $diffInHours >= 24)
                      <p> posted before {{$diffInDays}} days</p>
                      @endif --}}
                                   
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-5  ">
                    <div
                        style=" position: relative;
           width: 450px;
           left:50px;
          text-align: center;
         
     
           ">



                    </div>
                </div>


            </div>

            </div>



        </section>



    </x-app-layout>
