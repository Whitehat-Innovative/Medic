@extends('layouts.users.app')
@section('content')


 <!--=================================
         Banner start-->
         <div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg'); background-attachment: fixed;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                           <h2>Our Services</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fas fa-home mr-2"></i>Home</a></li>
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
                        <a href="{{route('contact')}}"> <img src="/assets/images/call-img.jpg" alt="" class="rounded img-fluid"> </a>
                     </div>
                  </div>
                  <div class="col-lg-8 ps-3 mt-4 mt-lg-0">
                     <div class="pq-menu-content">
                        <div class="pq-rhs-img text-center"> <img src="/assets/images/pexels-jozemara-friorili-lemes-3470004.jpg" alt="" class="rounded img-fluid"> </div>
                        <div class="pq-section-title-box pq-section-title-style-2 pt-4">

                        </div>
                        <div class="row">


                           <div class="row mt-4">
                              <div class="col-lg-6 col-md-12"> <img src="/assets/images/services/1.jpg" class="img-fluid" alt=""> </div>
                              <div class="col-lg-6 col-md-12 mt-lg-0 mt-4"> <img src="/assets/images/services/2.jpg" class="img-fluid" alt=""> </div>
                           </div>

                           <div class="row">
                              <div class="pq-section-title-box pq-section-title-style-2 pt-4">
                                 <h4 class="pq-section-title">Health Tips & Info</h4>
                                 <div class="pq-section-description">
                                    <p> Happiness is very contributory to longetivity....always be happy no minding the day's challenges. </p>
                                 </div>
                              </div>

                              <div class="pq-accordion-block ">
                                 <div class="pq-accordion-box  1">
                                    <div class="pq-ad-title">
                                       <h6 class="ad-title-text">
                                             Where can I go to provide a sample for testing?
                                             <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                          </h6> </div>
                                    <div class="pq-accordion-details" style="display: none;">
                                       <p class="pq-detail-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>
                                    </div>
                                 </div>
                                 <div class="pq-accordion-box   2">
                                    <div class="pq-ad-title">
                                       <h6 class="ad-title-text">
                                             What happens to my sample once I have provided it?
                                             <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                          </h6> </div>
                                    <div class="pq-accordion-details" style="display: none;">
                                       <p class="pq-detail-text"> It is taken to the laboratory immediately for processing</p>
                                    </div>
                                 </div>
                                 <div class="pq-accordion-box   3 ">
                                    <div class="pq-ad-title">
                                       <h6 class="ad-title-text">
                                             What will laboratory testing cost me?
                                             <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                          </h6> </div>
                                    <div class="pq-accordion-details" style="display: block;">
                                       <p class="pq-detail-text"> It cost can be as low as ₦500.00. <br> Generally the cost depends on the type and kind of the test needed to be done. </p>
                                    </div>
                                 </div>
                                 <div class="pq-accordion-box   4 ">
                                    <div class="pq-ad-title">
                                       <h6 class="ad-title-text">
                                             Using Innovative Technology
                                             <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                          </h6> </div>
                                    <div class="pq-accordion-details" style="display: block;">
                                       <p class="pq-detail-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>
                                    </div>
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
        @endsection
