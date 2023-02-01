@extends('layouts.users.app')
@section('content')


<!--=================================
         Banner start-->
         <div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg');">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                           <h2>Contact Us</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-2"></i>Home</a></li>
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
                           <p class="pq-contact-box-description"> The Queen's Walk, Bishop's, London SE1 7PB, United Kingdom. </p>
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
                           <p class="pq-contact-box-description"> + (567) 1234-567-8900
                              <br>+ (567) 1234-567-8901 </p>
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
                           <p class="pq-contact-box-description"> <a href="https://peacefulqode.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abc2c5cdc4ebdbcecac8cecddec7dfc3cec6ced885c8c4c6">[email&#160;protected]</a>
                              <br><a href="https://peacefulqode.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="573e3931386517273236343231223b233f323a32247934383a">[email&#160;protected]</a> </p>
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
                           <h5 class="pq-section-title">Get in touch with us</h5> </div>
                     </div>
                     <div class="pq-applyform-whitebg text-start">
                        <form action="#" class="pq-applyform">
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <input type="text" id="first-name" name="your-name" class="name-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="email" id="e-mail" name="your-email" class="e-mail-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="text" id="phone-number" name="phone-number" class="phone-number-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Phone Number">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="text" id="subject" name="your-Subject" class="subject-field" size="40" aria-required="true" aria-invalid="false" placeholder="Subject">
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <textarea name="your-message" id="message" cols="40" rows="10" aria-required="true" aria-invalid="false" placeholder="Write Your Message"></textarea>
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
               <iframe src="/assets/https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d317893.19730324426!2d-0.1195537!3d51.5032973!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye%20Riverside%20Building%2C%20County%20Hall%20London%20SE1%207PB%20United%20Kingdom!3m2!1d51.5032973!2d-0.1195537!5e0!3m2!1sen!2sin!4v1652772883319!5m2!1sen!2sin" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <!--=================================
               map end-->
@endsection
