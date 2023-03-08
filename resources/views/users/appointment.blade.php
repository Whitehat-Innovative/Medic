@extends('layouts.users.app')
@section('description')
@section('title')

@section('content')

<div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg'); background-attachment: fixed;">
    <div class="container">
          <div class="row align-items-center">
                <div class="col-lg-12">
                      <nav aria-label="breadcrumb">
                            <div class="pq-breadcrumb-title">
                                  <h2>Make
                   Appointments
                </h2> </div>
                            <div class="pq-breadcrumb-container mt-2">
                                  <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-2"></i>Home</a></li>
                                        <li class="breadcrumb-item active">Make Appointments </li>
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
 appoinment-form start-->
<div class="appoinment-form  appointment-page pq-pt-130 pb-0">
    <div class="container">
          <div class="row">
                <div class="col-xl-6">
                      <div class="appoinment-box">
                            <form action="{{route('make.appointment')}}" method="POST" class="pq-applyform" novalidate> @csrf
                                  <div class="pq-appointment">
                                    @foreach ($errors->all() as $err)
                                    <p class="text-white alert alert-danger">
                                        {{$err}}
                                    </p>
                                    @endforeach
                                        <div class="row">


                                              <div class="col-lg-12">
                                                    <input type="text" id="patient-name" name="name" class="form-control pq-bg-white paitent-name-field"  placeholder="Patient Name" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="text" id="phone-number" name="phone" class="form-control pq-bg-white phone-number-field" aria-invalid="false" placeholder="Phone" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="email" id="e-mail" name="email" class="form-control pq-bg-white e-mail-field"  aria-invalid="false" placeholder="your-email" required>
                                              </div>
                                              <div class="col-lg-12">
                                                <select name="location_id" class="form-control pq-bg-white email-field" id="">
                                                    <option disabled selected value=""> Select your preffered location </option>
                                                    @foreach ($loc as  $location)
                                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                              <div class="col-lg-12">
                                                    <textarea cols="40" id="message" rows="10"  name="appointment_note" aria-invalid="false" class="form-control pq-bg-white" placeholder="Type Appointment Note"></textarea>
                                              </div>
                                              <div class="col-lg-12">
                                                    <button class="pq-button form-btn" type="submit">
                                                          <div class="pq-button-block">
                                                                <span class="pq-button-text me-0">SUBMIT</span>
                                                          </div>
                                                    </button>
                                              </div>
                                        </div>
                                  </div>
                            </form>
                      </div>
                </div>
                <div class="col-xl-6">
                      <div class="appointment-img text-center"> <img src="/assets/images/calendar.jpg" alt="" class="img-a img-fluid"> </div>
                </div>
          </div>
    </div>
</div>
<!--=================================
 appoinment-form end-->
<!--=================================
 contact-healthcare start-->
<section class="contact-us pq-bg-primary-dark pq-bg-img-1">
    <div class="container">
          <div class="row ">
                <div class="col-xl-7">
                      <h6 class="pq-title">A place of great medical care</h6> </div>
                <div class="col-xl-5 d-xl-flex justify-content-xl-end align-items-center text-left mt-xl-0 mt-4">
                      <a class="pq-button pq-button-flat" href="{{route('contact')}}">
                            <div class="pq-button-block"> <span class="pq-button-text">Contact Us</span> <i class="ion ion-plus-round"></i> </div>
                      </a>
                </div>
          </div>
    </div>
</section>
<!--=================================

@endsection
