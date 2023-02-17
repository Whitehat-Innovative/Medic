@extends('layouts.users.app')
@section('description')
@section('title')
@section('content')

<div class="appoinment-form  appointment-page pq-pt-130 pb-0" >
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="appoinment-box">
                    <div>
                        <form method="POST"  action="{{route('fund')}}">
                            @csrf

                            @foreach ($errors->all() as $err)
                            <p class="text-danger-text-center">{{$err}}</p>
                            @endforeach

                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" name="amount" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Donor_name</label>
                                <input type="name" name="donor_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Donor_email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            {{-- <input type="hidden" name="quality" > --}}
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="quantity" value="100">
                            <input type="hidden" name="metadata"
                                value="{{ json_encode($array = ['key_name' => 'value',]) }}">
                            {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            {{-- required --}}
                            <input type="hidden" name="callback_url" value="{{route('transaction.callback')}}">
                            <input type="hidden" name="patient_id" value="1">
                            <input type="hidden" name="target_fund" value="{{number_format(0000)}}">

                            <button type="" class="btn btn-primary">Pay</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="appointment-img text-center"> <img src="/assets/images/donate.jpg" alt="" class="img-a img-fluid"> </div>
          </div>
        </div>
    </div>
    <section class="contact-us pq-bg-primary-dark pq-bg-img-1">
        <div class="container">
              <div class="row ">
                    <div class="col-xl-7">
                          <h6 class="pq-title">A great place of medical care</h6> </div>
                    <div class="col-xl-5 d-xl-flex justify-content-xl-end align-items-center text-left mt-xl-0 mt-4">
                          <a class="pq-button pq-button-flat" href="{{route('contact')}}">
                                <div class="pq-button-block"> <span class="pq-button-text">Contact Us</span> <i class="ion ion-plus-round"></i> </div>
                          </a>
                    </div>
              </div>
        </div>
    </section>
 @endsection
