@extends('layouts.users.app')

@section('content')
<!--=================================
         Banner start-->
         <div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg');">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <nav aria-label="breadcrumb" >
                        <div class="pq-breadcrumb-title">
                           <h2>Pricing Plan</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Pricing Plan</li>
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
               pricing-plan start-->
         <section class="pricing-plan">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">DONATE</span>
                        <h5 class="pq-section-title">You can also donate to us</h5> </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                     <div class="pq-pricing-plan pq-style-1 ">
                        <div class="pq-pricing-head"> <span class="pq-title"> Donate by USSD or Transfer </span>
                           {{-- <div class="pq-service-media"> <i class=" flaticon-medical-doctor"></i> </div> --}}
                           <div class="price"> <span class="pq-amount"></span>  </div>
                        </div>

                        <a class="pq-button pq-button-flat page-2" href="#">
                           <div class="pq-button-block"> <span class="pq-button-text">Purchace Now</span> <i class="ion ion-plus-round"></i> </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-6 mt-4 mt-lg-0 mt-md-0">
                     <div class="pq-pricing-plan pq-style-1 active ">
                        <div class="pq-pricing-head"> <span class="pq-title">Pay With Card </span>
                           {{-- <div class="pq-service-media"> <i class=" flaticon-doctor"></i> </div> --}}
                           <div class="price"> <span class="pq-amount"></span> <span class="price-month"></span> </div>
                        </div>
                        <a class="pq-button pq-button-flat page-2" href="#">
                           <div class="pq-button-block"> <span class="pq-button-text">Pay Now</span> <i class="ion ion-plus-round"></i> </div>
                        </a>
                     </div>
                  </div>

               </div>
            </div>
         </section>
         <!--=================================
               pricing-plan end-->

@endsection
