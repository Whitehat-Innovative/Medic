@extends('layouts.users.app')
@section('description')
@section('title')
@section('content')


<!--=================================
         Banner start-->
<div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg'); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>Our Services</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i
                                        class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item active">Our Services</li>
                        </ol>
                    </div>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
            </div>
        </div>
    </div>
</div>
<!--=================================
               Banner end-->
<!--=================================
               all services start-->
         <section class="all-services pq-pb-210">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="pq-widget">
                        <div class="pq-widget pq-widget-port p-0">
                           <div class="menu-service-menu-container">
                              <ul id="menu-service-menu" class="menu">
                                 <li class=" current-menu-item"> <a href="#" aria-current="page">Medical Consultancy</a> </li>
                                 <li class=" current-menu-item"><a href="#">Surgery </a> </li>
                                 <li class=" current-menu-item"><a href="#">Gynecology</a> </li>
                                 <li class=" current-menu-item"><a href="#">Maternity</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Pediatrics</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Intensive Care Unit</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Medical Laboratory</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Ultrasound</a> </li>
                                 <li class=" current-menu-item"> <a href="#">ECG</a> </li>
                                 <li class=" current-menu-item"> <a href="#">X-RAY</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Mammography</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Physiotherapy</a> </li>
                                 <li class=" current-menu-item"> <a href="#">Incubator Nursing</a> </li>





                              </ul>
                           </div>
                        </div>
                     </div>
                     <div id="media_image">
                        <a href="{{route('contact')}}"> <img src="/assets/images/calendar-2.jpg" alt="" class="rounded img-fluid"> Contact Us </a>
                     </div>
                  </div>
                  <div class="col-lg-8 ps-3 mt-4 mt-lg-0">
                     <div class="pq-menu-content">
                        <div class="pq-rhs-img text-center"> <img src="/assets/images/IMG_20230130_142832_146.jpg" alt="" class="rounded img-fluid"> </div>
                        <div class="pq-section-title-box pq-section-title-style-2 pt-4">



                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 ps-3 mt-4 mt-lg-0">
                <div class="pq-menu-content">
                    <div class="pq-rhs-img text-center"> <img src="/assets/images/IMG_20230130_142832_146.jpg" alt=""
                            class="rounded img-fluid"> </div>
                    <div class="pq-section-title-box pq-section-title-style-2 pt-4">

                    </div>
                    <div class="row">


                       

                        <div class="row">
                            <div class="pq-section-title-box pq-section-title-style-2 pt-4">
                                <h4 class="pq-section-title">Health Tips & Info</h4>
                                <div class="pq-section-description">
                                    <p> Happiness is very contributory to longetivity....always be happy not minding the
                                        day's challenges. </p>
                                </div>
                            </div>

                            <div class="pq-accordion-block ">
                                <div class="pq-accordion-box  1">
                                    <div class="pq-ad-title">
                                        <h6 class="ad-title-text">
                                            What kind of common foods are unhealthy for me?
                                            <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                        </h6>
                                    </div>
                                    <div class="pq-accordion-details" style="display: none;">
                                        <p class="pq-detail-text"> One of them is Salt. <br>
                                            Eating plenty of Salt worsens blood pressure so all hypertensive patients
                                            should avoid plenty salt consumption. </p>
                                    </div>
                                </div>
                                <div class="pq-accordion-box   2">
                                    <div class="pq-ad-title">
                                        <h6 class="ad-title-text">
                                            What happens to my sample once I have provided it?
                                            <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                        </h6>
                                    </div>
                                    <div class="pq-accordion-details" style="display: none;">
                                        <p class="pq-detail-text"> It is taken to the laboratory immediately for
                                            processing</p>
                                    </div>
                                </div>
                                <div class="pq-accordion-box   3 ">
                                    <div class="pq-ad-title">
                                        <h6 class="ad-title-text">
                                            What will laboratory testing cost me?
                                            <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                        </h6>
                                    </div>
                                    <div class="pq-accordion-details" style="display: block;">
                                        <p class="pq-detail-text"> It cost can be as low as ₦500.00. <br> Generally the
                                            cost depends on the type and kind of the test needed to be done. </p>
                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--=================================
               all services end-->
                <div class="container mb-5">
                    <div class="row align-items-center pq-bg-primary pq-reveser flex-md-column-reverse flex-lg-row">
                        <div class="col-lg-4 text-center"> <img src="/assets/images/calendar.jpg"  alt="...">  </div>
                        <div class="col-lg-8 mt-5 mt-lg-0 pq-form-pad pq-blue-section-side-right">
                            <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">Tell Us How you Feel</span>
                                <h5 class="pq-section-title pq-text-white">Did you enjoy our services</h5>
                            </div>
                            <form action="{{ route('make.testimonial') }}" method="POST" class="pq-applyform mt-5" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="name" id="first-name"
                                            class="pq-bg-transparent name-field" placeholder="Your Name" required>
                                    </div>


                                    <div class="col-md-12">
                                        {{-- <input type="text" name="your-disease" id="disease-name"
                                class="pq-bg-transparent disease-name-field" placeholder="Your Disease Name"
                                required> --}}
                                        <textarea name="message" class="form-control" id="" placeholder="Message" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                    <div class="col-md-12 mb-5">
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


        @endsection
