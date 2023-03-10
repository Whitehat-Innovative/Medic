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
                        <h2>Donate</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i
                                        class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item active">Donate</li>
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
                    <h5 class="pq-section-title">You can donate to us</h5>
                </div>
            </div>

            {{-- @foreach ($p as $p)

                  <div class="col-xl-6 col-md-6">
                     <div class="pq-pricing-plan pq-style-1 ">
                        <div class="pq-pricing-head"> <span class="pq-title"><img src="/Patient-image/{{$p->image}}"
            alt="alt"> </span>
            <div class="pq-service-media"> <i class=" flaticon-medical-doctor"></i> </div>
            <div class="price"> <span class="pq-amount"></span> </div>
        </div>

        <a class="pq-button pq-button-flat page-2" href="{{route('pay', $p)}}">
            <div class="pq-button-block"> <span class="pq-button-text">Donate Now</span> <i
                    class="ion ion-plus-round"></i> </div>
        </a>
    </div>
    </div>

    @endforeach

    <div class="col-xl-6 col-md-6 mt-4 mt-lg-0 mt-md-0">
        <div class="pq-pricing-plan pq-style-1 active ">
            <div class="pq-pricing-head"> <span class="pq-title">Donate Online </span>
                {{-- <div class="pq-service-media"> <i class=" flaticon-doctor"></i> </div> --}}
                <div class="price"> <span class="pq-amount"></span> <span class="price-month"></span> </div>
            </div>
            <a class="pq-button pq-button-flat page-2" href="{{route('pay')}}">
                <div class="pq-button-block"> <span class="pq-button-text">Pay Now</span> <i
                        class="ion ion-plus-round"></i> </div>
            </a>
        </div>
    </div>

    </div>
    </div>
</section>
<!--=================================
               pricing-plan end-->

@endsection
