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
    <!-- About Details Start -->
    <div id="about-detail" class="about-details section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-80">
                        <span>About our company</span>
                        <h2>Promote and protect the general welfare of Filipino workers abroad.</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3>Guiding Principles</h3>
                    <p>The POLO shall provide maximum services to Filipino Migrant Workers to protect their rights and
                        promote their welfare. In pursuit of this mandate, the POLO shall focus on the following key
                        areas, namely: employment protection and facilitation, provision of welfare services and skills
                        enhancement and other training programs, employment promotion and market development, and
                        linkages with the host government, relevant foreign embassies/consulate, international
                        organizations, the Filipino community and non-governmental institutions in the post.</p>
                </div>
                <div class="col-lg-5">
                    <h3>Plan Overview</h3>
                    <p>The Philippine Overseas Labor Office (POLO) is the Department of Labor and Employment’s (DOLE)
                        link to the world. It is directly under the Office of the Secretary of Labor. It acts as the
                        operating arm of DOLE for the administration and enforcement of its policies and programs
                        applicable to the Overseas Filipino Workers (OFW).</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->
    <!-- Services Area Start -->
    <div id="services-section" class="services-area section-bg"
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

    <!-- ================ contact section start ================= -->
    <section id="contact-sec" class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 400px;"></div>
                <script>
                    // Initialize and add the map
                    function initMap() {
                        // The location of Uluru
                        const uluru = { lat: 24.6757131, lng: 46.6808121 };
                        // The map, centered at Uluru
                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 15,
                            center: uluru,
                        });
                        // The marker, positioned at Uluru
                        const marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                        });
                    }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQQkfIgi0W3SJX7KQddC6_k8L7ihvWaUI&callback=initMap&libraries=&v=weekly"
                    async
                ></script>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                          novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                              onfocus="this.placeholder = ''"
                                              onblur="this.placeholder = 'Enter Message'"
                                              placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                           placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                           placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>3267 Makkah Al</h3>
                            <p>Mukarramah Branch<br>Road, Al Mutamarat,<br>Riyadh 12711 8103</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>Not Yet Available</h3>
                            <p>Book and appointment to visit</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>poloriyadh@dole.gov.ph</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
