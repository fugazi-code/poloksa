@extends('layouts.app')

@section('content')
    <!-- Hero Area Start-->
    <div class="slider-area hero-overly">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <span>Philippine Overseas Labour Office</span>
                            <h1>Find Agencies</h1>
                        </div>
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form" style="width: 79% !important;">
                                <input type="text" placeholder="What agency are you looking for?">
                            </div>
                            <div class="search-form">
                                <a href="#">Search</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Hero Area End-->
    <!-- Popular Locations Start -->
    {{--    <div class="popular-location section-padding30">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <!-- Section Tittle -->--}}
    {{--                    <div class="section-tittle text-center mb-80">--}}
    {{--                        <span>Most visited places</span>--}}
    {{--                        <h2>Popular Locations</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-location mb-30">--}}
    {{--                        <div class="location-img">--}}
    {{--                            <img src="assets/img/gallery/location1.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="location-details">--}}
    {{--                            <p>New York</p>--}}
    {{--                            <a href="#" class="location-btn">65 <i class="ti-plus"></i> Location</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-location mb-30">--}}
    {{--                        <div class="location-img">--}}
    {{--                            <img src="assets/img/gallery/location2.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="location-details">--}}
    {{--                            <p>Paris</p>--}}
    {{--                            <a href="#" class="location-btn">60 <i class="ti-plus"></i> Location</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-location mb-30">--}}
    {{--                        <div class="location-img">--}}
    {{--                            <img src="assets/img/gallery/location3.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="location-details">--}}
    {{--                            <p>Rome</p>--}}
    {{--                            <a href="#" class="location-btn">50 <i class="ti-plus"></i> Location</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-location mb-30">--}}
    {{--                        <div class="location-img">--}}
    {{--                            <img src="assets/img/gallery/location4.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="location-details">--}}
    {{--                            <p>Italy</p>--}}
    {{--                            <a href="#" class="location-btn">28 <i class="ti-plus"></i> Location</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-location mb-30">--}}
    {{--                        <div class="location-img">--}}
    {{--                            <img src="assets/img/gallery/location5.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="location-details">--}}
    {{--                            <p>Nepal</p>--}}
    {{--                            <a href="#" class="location-btn">99 <i class="ti-plus"></i> Location</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-location mb-30">--}}
    {{--                        <div class="location-img">--}}
    {{--                            <img src="assets/img/gallery/location6.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="location-details">--}}
    {{--                            <p>indonesia</p>--}}
    {{--                            <a href="#" class="location-btn">78 <i class="ti-plus"></i> Location</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- More Btn -->--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="room-btn pt-20">--}}
    {{--                    <a href="catagori.html" class="btn view-btn1">View All Places</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Popular Locations End -->
    <!-- Services Area Start -->
    <div class="services-area section-bg"
         style="background-image: url('https://images.freeimages.com/images/large-previews/93b/riyadh-city-1451164.jpg');background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center">

                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-40">
                <div class="col-lg-3 col-md-6">
                    <div class="single-services text-center mb-50">
                        <div class="services-icon">
                            <span class="flaticon-list"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#" style="
    text-shadow: 0 0 8px black;
">1. Appointment System</a></h5>
                            <p>With an appointment system, the non-urgent client can schedule their request in advance.
                                As this eliminates wait times upon arrival, it has a significant impact on the client
                                experience.</p>
                        </div>
                        <!-- Shpape -->
                        <img class="shape1 d-none d-lg-block" src="assets/img/icon/serices1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-services text-center mb-50">
                        <div class="services-icon">
                            <span class="flaticon-problem"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#" style="
    text-shadow: 0 0 8px black;
">2. Welfare Support</a></h5>
                            <p>Welfare refers to a range of government programs that provide financial or other aid to
                                individuals or groups who cannot support themselves.</p>
                        </div>
                        <img class="shape2 d-none d-lg-block" src="assets/img/icon/serices2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-services text-center mb-50">
                        <div class="services-icon">
                            <span class="flaticon-respect"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#" style="
    text-shadow: 0 0 8px black;
">3. Employment Facilitation</a></h5>
                            <p> The importance of being equipped with the right labor market information and advised
                                jobseekers and students alike to be guided by this information as they choose their
                                career path or profession.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Categories Area Start -->
    {{--    <div class="categories-area section-padding30">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <!-- Section Tittle -->--}}
    {{--                    <div class="section-tittle text-center mb-80">--}}
    {{--                        <span>We are offering for you</span>--}}
    {{--                        <h2>Featured Categories</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-cat text-center mb-50">--}}
    {{--                        <div class="cat-icon">--}}
    {{--                            <span class="flaticon-bed"></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="cat-cap">--}}
    {{--                            <h5><a href="catagori.html">Leving Hotel</a></h5>--}}
    {{--                            <p>Must explain your how this keind denoun pleasure</p>--}}
    {{--                            <a href="catagori.html">View Details</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-cat text-center mb-50">--}}
    {{--                        <div class="cat-icon">--}}
    {{--                            <span class="flaticon-drink"></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="cat-cap">--}}
    {{--                            <h5><a href="catagori.html">Night Life</a></h5>--}}
    {{--                            <p>Must explain your how this keind denoun pleasure</p>--}}
    {{--                            <a href="catagori.html">View Details</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-cat text-center mb-50">--}}
    {{--                        <div class="cat-icon">--}}
    {{--                            <span class="flaticon-home"></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="cat-cap">--}}
    {{--                            <h5><a href="catagori.html">Culture Place</a></h5>--}}
    {{--                            <p>Must explain your how this keind denoun pleasure</p>--}}
    {{--                            <a href="catagori.html">View Details</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-cat text-center mb-50">--}}
    {{--                        <div class="cat-icon">--}}
    {{--                            <span class="flaticon-food"></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="cat-cap">--}}
    {{--                            <h5><a href="catagori.html">Resturent</a></h5>--}}
    {{--                            <p>Must explain your how this keind denoun pleasure</p>--}}
    {{--                            <a href="catagori.html">View Details</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Categories Area End -->
    <!-- peoples-visit Start -->
    {{--    <div class="peoples-visit dining-padding-top">--}}
    {{--        <!-- Single Left img -->--}}
    {{--        <div class="single-visit left-img">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row justify-content-end">--}}
    {{--                    <div class="col-lg-8">--}}
    {{--                        <div class="visit-caption">--}}
    {{--                            <span>We are offering for you</span>--}}
    {{--                            <h3>Every Month, Millions of People--}}
    {{--                                visit this site We’ve Built.</h3>--}}
    {{--                            <p>Unlike what its name implies, dry cleaning is not actually a 'dry' process. Clothes are soaked in a different solvent.</p>--}}
    {{--                            <!--Single Visit categories -->--}}
    {{--                            <div class="visit-categories mb-40">--}}
    {{--                                <div class="visit-location">--}}
    {{--                                    <span class="flaticon-travel"></span>--}}
    {{--                                </div>--}}
    {{--                                <div class="visit-cap">--}}
    {{--                                    <h4>Great places in the world</h4>--}}
    {{--                                    <p>Unlike what its name implies, dry cleaning is not actu  process. Clothes soaked differentent.--}}
    {{--                                    </p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <!--Single Visit categories -->--}}
    {{--                            <div class="visit-categories">--}}
    {{--                                <div class="visit-location">--}}
    {{--                                    <span class="flaticon-work"></span>--}}
    {{--                                </div>--}}
    {{--                                <div class="visit-cap">--}}
    {{--                                    <h4>Biggest category listing</h4>--}}
    {{--                                    <p>Unlike what its name implies, dry cleaning is not actu  process. Clothes soaked differentent.--}}
    {{--                                    </p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- peoples-visit End -->
    <!-- Testimonial Start -->
    {{--    <div class="testimonial-area testimonial-padding">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <!-- Section Tittle -->--}}
    {{--                    <div class="section-tittle text-center mb-80">--}}
    {{--                        <span>Our client testimonials</span>--}}
    {{--                        <h2>What our client say</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row align-items-center">--}}
    {{--                <div class="col-lg-11 col-md-11">--}}
    {{--                    <div class="h1-testimonial-active">--}}
    {{--                        <!-- Single Testimonial -->--}}
    {{--                        <div class="single-testimonial text-center">--}}
    {{--                            <!-- Testimonial Content -->--}}
    {{--                            <div class="testimonial-caption ">--}}
    {{--                                <div class="testimonial-top-cap">--}}
    {{--                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>--}}
    {{--                                </div>--}}
    {{--                                <!-- founder -->--}}
    {{--                                <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">--}}
    {{--                                    <div class="founder-img">--}}
    {{--                                        <img src="assets/img/testmonial/Homepage_testi.png" alt="">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="founder-text">--}}
    {{--                                        <span>Oliva jems</span>--}}
    {{--                                        <p>UIX designer</p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Single Testimonial -->--}}
    {{--                        <div class="single-testimonial text-center">--}}
    {{--                            <!-- Testimonial Content -->--}}
    {{--                            <div class="testimonial-caption ">--}}
    {{--                                <div class="testimonial-top-cap">--}}
    {{--                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>--}}
    {{--                                </div>--}}
    {{--                                <!-- founder -->--}}
    {{--                                <div class="testimonial-founder d-flex align-items-center justify-content-center mb-30">--}}
    {{--                                    <div class="founder-img">--}}
    {{--                                        <img src="assets/img/testmonial/Homepage_testi.png" alt="">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="founder-text">--}}
    {{--                                        <span>Oliva jems</span>--}}
    {{--                                        <p>UIX designer</p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Testimonial End -->
    <!-- Subscribe Area Start -->
    {{--    <div class="subscribe-area section-bg pt-150 pb-150" data-background="assets/img/gallery/section_bg04.jpg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-xl-6 col-lg-8">--}}
    {{--                    <!-- Section Tittle -->--}}
    {{--                    <div class="section-tittle section-tittle2 text-center mb-40">--}}
    {{--                        <span>Subscribe out newslatter</span>--}}
    {{--                        <h2>Subscribe For Newsletter</h2>--}}
    {{--                    </div>--}}
    {{--                    <!--Hero form -->--}}
    {{--                    <form action="#" class="search-box">--}}
    {{--                        <div class="input-form">--}}
    {{--                            <input type="text" placeholder="What are you looking for?">--}}
    {{--                        </div>--}}
    {{--                        <div class="search-form">--}}
    {{--                            <a href="#">Send Now</a>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Subscribe Area End -->
    <!-- Blog Ara Start -->
    {{--    <div class="home-blog-area section-padding30">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <!-- Section Tittle -->--}}
    {{--                    <div class="section-tittle text-center mb-70">--}}
    {{--                        <span>Our blog</span>--}}
    {{--                        <h2>News and tips</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-team mb-30">--}}
    {{--                        <div class="team-img">--}}
    {{--                            <img src="assets/img/gallery/home_blog1.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="team-caption">--}}
    {{--                            <span>HEALTH & CARE</span>--}}
    {{--                            <h3><a href="blog.html">The Best SPA Salons For--}}
    {{--                                    Your Relaxation</a></h3>--}}
    {{--                            <p>October 6, 2020by Steve</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-team mb-30">--}}
    {{--                        <div class="team-img">--}}
    {{--                            <img src="assets/img/gallery/home_blog2.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="team-caption">--}}
    {{--                            <span>HEALTH & CARE</span>--}}
    {{--                            <h3><a href="blog.html">The Best SPA Salons For--}}
    {{--                                    Your Relaxation</a></h3>--}}
    {{--                            <p>October 6, 2020by Steve</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">--}}
    {{--                    <div class="single-team mb-30">--}}
    {{--                        <div class="team-img">--}}
    {{--                            <img src="assets/img/gallery/home_blog3.png" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="team-caption">--}}
    {{--                            <span>HEALTH & CARE</span>--}}
    {{--                            <h3><a href="blog.html">The Best SPA Salons For--}}
    {{--                                    Your Relaxation</a></h3>--}}
    {{--                            <p>October 6, 2020by Steve</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Blog Ara End -->
@endsection
