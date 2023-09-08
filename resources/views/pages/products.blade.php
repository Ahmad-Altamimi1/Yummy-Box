<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Volunteer &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>


  



<div class="section cause-section bg-light">

		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
					<span class="subheading mb-3">Causes</span>
					<h2 class="heading">Featured Causes</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Animi quaerat, eaque asperiores quos natus, ratione.</p>

					<div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
						<button  class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev"> <span class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
						<button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
					</div>
				</div>
			</div>	
		</div>


		<div class="container mb-5">
			<div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
				<div class="features-slider" id="features-slider">




        @foreach ($products as $product)
					<div class="item">
						<div class="causes-item bg-white">
							<a href="#"><img src="images/img_v_1-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
							<div class="px-4 pb-5 pt-3">

								<h3><a href="#">{{$product->name}}</a></h3>
								<p>{{$product->breif}}</p>

								<div class="progress mb-2">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>

								<div class="d-flex mb-4 justify-content-between amount">
									<div>$509.00</div>
									<div>$10,000.00</div>
								</div>
								<div>
									<a href="#" class="btn btn-primary">more details</a>
								</div>
							</div>
						</div>
					</div>

        @endforeach



					



				</div>
			</div>
		</div>


	</div>	



  
      
  <div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>