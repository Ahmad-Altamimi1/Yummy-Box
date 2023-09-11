<x-app-layout>





    <div class="hero overlay hero-profile"
        style="background-image: url('{{ asset('images/bg11.png') }}'); height: 500px; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading mt-6 mb-2" style="color:#fff; font-weight: bolder;" data-aos="fade-up">Your Profile
                    </h1>
                </div>
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>



        </div>
    </div>













    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="about">About us</a></li>
                            <li><a href="{{ route('news') }}">News</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Popular Causes</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Education Equity</a></li>
                            <li><a href="#">Passion for Learning</a></li>
                            <li><a href="#">Positive Impact</a></li>
                            <li><a href="#">Personal Fulfillment</a></li>
                            <li><a href="#">Community Developmen</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">back-end</a></li>
                            <li><a href="#">front-end</a></li>
                            <li><a href="#">UI-UX</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->


                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>jordan</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">0798832182</a></li>
                            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>

                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>

                        </ul>

                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->


            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="copyright">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            href="https://untree.co">Tech-Volunteer</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->







    <!-- Preloader -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>
    <script src="js/glightbox.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    </body>

    </html>
</x-app-layout>
