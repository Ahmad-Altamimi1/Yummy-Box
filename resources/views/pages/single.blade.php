
@extends('layouts.master')


@section('title','Project')



<div class="site-mobile-menu site-navbar-target" >
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

<div class="hero overlay" style="background-image: url({{ $products->image }})">
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

 <section class="container" style="color: black">

      <br><br>
 
        <div class="inside-container row g-5">

            
<div class="col-7">
            <div class="single-product-left">

                

                <div class="single-product-left-second-div ">
                    <div class="single-product-left-second-div-image">
                      
                        <h3><a href="../images/hero_1.jpg">Below you will see the details:</a></h3> <br>
                    </div>
                    
                    <div>
                        <i class="fa-solid fa-location-dot fa-2xl" style="color: #318c5d;"> </i> <span> {{ $products->location }}</span>
                    </div>
                    <br> <br>
                    <div>
                        <i class="fa-regular fa-clock fa-2xl" style="color: #f3ec20;"> </i><span> Start at{{ $products->time }}</span>
                    </div>
                    <br> <br>
                    <div>
                        <i class="fa-regular fa-calendar-days fa-2xl" style="color: #fd9d17;"> </i> <span> Days of instruction:{{ $products->period }}</span>
                    </div>
                </div>
              <hr >
                
                
            </div>
           <div >
            <h1>Role</h1>
            <p>About the job and it’s activities</p>

            <div class="single-product-right" >
                <div class="single-product-right-h1">
                    <h3 class="single-product-left-first-h4">About </h3>

                <p>
                    {{ $products->description2 }}
                 </p>
               
                        <h3 class="single-product-left-first-h4">Responsibilities </h3>
    
                    <p>
                        {{ $products->description3 }}
                     </p>

                     <h3 class="single-product-left-first-h4">Prosses </h3>
    
                     <p>
                        <ul style="list-style-color: green;list-style-type: disc">
                            <li>Apply Online: Fill out our quick online application form, indicating your interest in mentoring for the Front-End Foundations project.</li>
                            <li>Resume Submission: Upload your CV or resume to showcase your skills and experience in web development.</li>
                            <li>Interview and Orientation: After reviewing your application, we'll schedule a brief interview to discuss your availability and expectations. Attend an orientation to get acquainted with our platform and guidelines.</li>
                            <li>Mentor Match: Once approved, we'll match you with learners eager to participate in the Front-End Foundations project.</li>
                            <li>Start Mentoring: Begin your volunteer journey by mentoring and sharing your expertise with aspiring web developers.</li>
                        </ul>
                      
                        
                        
                        
                        
                        
                        
                      </p>
                    <div style="text-align:end">
                      {{-- <p>{{ $products->total }}</p> --}}
                      @if ($diffInMinutes<60)
                      <p> posted before {{$diffInMinutes}} Minutes</p>
                      @endif
                      @if ($diffInMinutes>60 &&$diffInHours <24)
                      <p> posted before {{$diffInHours}} Hours</p>
                      @endif
                      @if ($diffInMinutes>60 && $diffInHours >=24)
                      <p> posted before {{$diffInDays}} days</p>
                      @endif
                      @auth
                          
                      @if ( Auth::user()->id ==false)
                          <div> you must log in</div>
                      @endif
                      @if ( Auth::user()->id ==true)
                      <div>{{ Auth::user()->id }}</div>
                          
                      @endif
                      
                      @endauth
                    </div>

            </div>
        </div>

    </div>

        </div>

        <div class="col-5  ">
            <div style=" position: relative;
           width: 450px;
           left:50px;
          text-align: center;
         
     
           ">
                
               <div style="border: #4a260b solid 3px ; padding : 25px 10px"> <h3>Join us, volunteer, empower</h3> 
                <br>
                <div class="">
                <x-primary-button class="btn btn-primary me-4 " style="background-color: #54ac75 ; width:75% ; height:50px"
                            x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'Join Us as a Trainer')"
                       >{{ __('Join Us as a Trainer') }}</x-primary-button>

                        <x-modal name="Join Us as a Trainer" :show="$errors->changePassword->isNotEmpty()" focusable>

                            <div class="container mt-5">
                                <h1> Training Volunteer Form</h1>
                                <form action="{{ route('frontvolunteers.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')                                     <div class="form-group">                
                                        <input  type="hidden" class="form-control" id="user_id"  name="user_id" required>
                        
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="Address" required>
                        
                        
                                    </div>
                                    <div class="form-group">
                                        <label for="programmingLanguages">Proficient Programming Classes</label>
                                        <select class="form-control" id="programmingLanguages" name="Languages" >
                                            <option value="Choose Language">Choose Class</option>
                                            <option value="FrontEnd">FrontEnd</option>
                                            <option value="BackEnd">BackEnd</option>
                                            <option value="javascript">UX/UI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="day">I would like to help weekly</label>
                                        <select class="form-control" id="day" name="day" >
                                            <option value="Choose Day">Choose Day</option>
                                            <option value="saturday">Saturday</option>
                                            <option value="sunday">Sunday</option>
                                            <option value="monday">Monday</option>
                                            <option value="tuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <textarea class="form-control" id="experience" name="Experience" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="cv">CV</label>
                                        <input type="file" class="form-control-file" id="cv" name="CV" required>
                                    </div>
                                 @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    
                                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                </form>
                                
                            </div>
                       </x-modal> <br><br>
                    <form action="paypal" method="POST" class=" p-5 rounded donation-form" data-aos="fade-up">
                        @csrf
                        <h3 >Quick Donation Form</h3>
                      
                        <div class="form-field mb-3">
                            <label for="amount-1" class="amount js-amount" data-value="1.00">
                                <input type="radio" id="amount-1" name="radio-amount" checked="true">
                                <span>$1</span>
                            </label>
    
                            <label for="amount-2" class="amount js-amount" data-value="5.00">
                                <input type="radio" id="amount-2" name="radio-amount">
                                <span>$5</span>
                            </label>
                            <label for="amount-3" class="amount js-amount" data-value="25.00">
                                <input type="radio" id="amount-3" name="radio-amount">
                                <span>$25</span>
                            </label>
                            <label for="amount-4" class="amount js-amount" data-value="100.00">
                                <input type="radio" id="amount-4" name="radio-amount">
                                <span>$100</span>
    
                                    
                                </label>
                                <h3>And you can select custom</h3>
    
                        </div>
                        <div class="field-icon">
                            <span>$</span>
                            <input type="text" placeholder="0.00" class="form-control px-4" name="price"
                                value="1.00">
    
                            </div>
                            <div class="form-field mb-3">
                                {{-- <input type="text" placeholder="Name" class="form-control px-4"> --}}
                                {{-- <input type="email" placeholder="Email" class="form-control px-4"> --}}
                            </div>
    
                            <input type="submit" value="Paypal" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75">
                        </form>


                        <form action="stripe" class="  rounded donation-form" method="post" style="padding: 0px 50px">
                            @csrf
                                                    <h3 for="" style=" margin:0;    font-weight: bold;
                                margin-bottom: 0px;
                                text-transform: uppercase;
                                font-size: 18px;">Or donate by Visa</h3> <br>
                            
                                                     <input type="text" placeholder="0.00" class="form-control px-4" name="price" required>
                                                     <input type="submit" value="visa" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75" >
                                                </form>
    
                </div>  
                
              
            </div>
            </div>
   
   
           </div>

    </div>

       


    </section>


   
</x-app-layout>
