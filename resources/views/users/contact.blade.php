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
                           <h2>Contact Us</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Contact Us</li>
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
               conatct-us start-->
         <section class="pq-contact-us">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="pq-contact-box">
                        <div class="pq-contact-box-icon">
                           <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-location"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                           <h4 class="pq-contact-box-title">
                                    Our Location
                                 </h4>
                           <p class="pq-contact-box-description"> 9 Rumuolukwu, Eneka, Rivers State </p>
                           <p class="pq-contact-box-description"> 58 Airport Road, Rumuodomaya, Rivers State </p>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-4">
                     <div class="pq-contact-box">
                        <div class="pq-contact-box-icon">
                           <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-ios-telephone"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                           <h4 class="pq-contact-box-title">
                                    Our Contact
                                 </h4>
                           <p class="pq-contact-box-description"> + (234) 816-492-4608
                              <br>+ (234) 903-033-7346 </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                     <div class="pq-contact-box">
                        <div class="pq-contact-box-icon">
                           <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-email-unread"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                           <h4 class="pq-contact-box-title">
                                    Mail Us
                                 </h4>
                           <p class="pq-contact-box-description"> <a href="www.gmail.com/egbuchulemo" class="__cf_email__" data-cfemail="abc2c5cdc4ebdbcecac8cecddec7dfc3cec6ced885c8c4c6">egbuchulemo@gmail.com</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
               contact-us end-->
         <!--=================================
               get-in-touch start-->
         <section class="get-in-touch p-0">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-8  pq-form-box">
                     <div class="form-container">
                        <div class="pq-section pq-style-1 text-center p-0"> <span class="pq-section-sub-title">contact us</span>
                           <h5 class="pq-section-title">is there something we you want to tell us?</h5> </div>
                     </div>
                     <div class="pq-applyform-whitebg text-start">
                        <form action="{{route('make.contact')}}" method="POST" class="pq-applyform"> @csrf
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <input type="text" id="first-name" name="name" class="name-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="email" id="e-mail" name="email" class="e-mail-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="text" id="phone-number" name="phone" class="phone-number-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Phone Number">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="text" id="subject" name="subject" class="subject-field" size="40" aria-required="true" aria-invalid="false" placeholder="Subject">
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <textarea name="message" id="message" cols="40" rows="10" aria-required="true" aria-invalid="false" placeholder="Write Your Message"></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <a class="pq-button form-btn">
                                    <div class="pq-button-block">
                                       <span class="pq-button-text me-0">send message</span>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
               get-in-touch end-->
         <!--=================================
               map start-->
         <div class="map pt-0">
            <div class="pq-bg-map">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=zolive%20hospital&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">how to embed google maps into html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%px;}</style></div></div>            </div>
         </div>
         <!--=================================
               map end-->
@endsection
