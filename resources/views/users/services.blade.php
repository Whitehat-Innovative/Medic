@extends('layouts.users.app')
 <!--=================================
         Banner start-->
         <div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg');">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                           <h2>Cardiology services</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Cardiology Services</li>
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
                                 <li> <a href="angioplasty-services.html" aria-current="page">Angioplasty Services</a> </li>
                                 <li class=" current-menu-item"><a href="cardiology-services.html">Cardiology Services </a> </li>
                                 <li><a href="dental-services.html">Dental Services</a> </li>
                                 <li><a href="endocrinology-services.html">Endocrinology Services</a> </li>
                                 <li> <a href="eye-care-services.html">Eye Care Services</a> </li>
                                 <li> <a href="nurology-service.html">Neurology Services</a> </li>
                                 <li> <a href="orthopaedics-services.html">Orthopaedics Services</a> </li>
                                 <li> <a href="rmi-services.html">RMI Services</a> </li>
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
                           <h4 class="pq-section-title">Professional Medical Service Of Cardiology</h4>
                           <div class="pq-section-description">
                              <p>Medicate is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since </p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-6">
                              <ul class="pq-portfolio-list-check">
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Aliquam tincidunt nisi vitae nulla molestie</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Praesent convallis odio elementum tortor.</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Nunc molestie ex at nisi vehicula pellentesque.</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Cras id purus faucibus, euismod metus.</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Aenean et libero tincidunt, auctor urna.</span></li>
                              </ul>
                           </div>
                           <div class="col-lg-6 p-lg-0">
                              <ul class="pq-portfolio-list-check">
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>There are many variations of passages of Lorem</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Ipsum available, but the majority have suffered.</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Alteration in some form, by injected humour.</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Randomised words which don't look.</span></li>
                                 <li><i aria-hidden="true" class="ion ion-checkmark"></i><span>Slightly believable. If you are going..</span></li>
                              </ul>
                           </div>
                           <div class="row">
                              <div class="pq-section-title-box pq-section-title-style-2 pt-2">
                                 <h4 class="pq-section-title">Advantage Dental Care</h4>
                                 <div class="pq-section-description"> Medicate is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since </div>
                              </div>
                           </div>
                           <div class="row mt-4">
                              <div class="col-lg-6 col-md-12"> <img src="/assets/images/services/1.jpg" class="img-fluid" alt=""> </div>
                              <div class="col-lg-6 col-md-12 mt-lg-0 mt-4"> <img src="/assets/images/services/2.jpg" class="img-fluid" alt=""> </div>
                           </div>
                           <div class="row">
                              <div class="pq-section-title-box pq-section-title-style-2 pt-4">
                                 <h4 class="pq-section-title">Health Tips & Info</h4>
                                 <div class="pq-section-description">
                                    <p>Medicate is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
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
                                       <p class="pq-detail-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>
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
                                       <p class="pq-detail-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>
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
