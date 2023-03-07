@extends('layouts.users.app')
@section('description')
@section('title')

@section('content')
 <!--=================================
         Banner start-->
         <div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg'); background-attachment: fixed">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                           <h1>Gallery </h1> </div>
                        <div class="pq-breadcrumb-container mt-2">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Gallery </li>
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
               porfolio start-->
         <section class="portfolio pq-pb-210">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="pq-grid-container">
                        <div class="pq-filters b74eca6">
                           <div class="filters pq-filter-button-group">
                              <ul>
                                 <li class="active pq-filter-btn" data-filter="*">All</li>
                                 <li class="pq-filter-btn" data-filter=".30">Clinic</li>
                                 <li class="pq-filter-btn" data-filter=".36">Family</li>
                                 <li class="pq-filter-btn" data-filter=".32">Laboratory</li>
                                 <li class="pq-filter-btn" data-filter=".33">Pediatrics</li>
                                 <li class="pq-filter-btn" data-filter=".34">Therapy</li>
                                 <li class="pq-filter-btn" data-filter=".37">Surgery</li>

                              </ul>
                           </div>
                        </div>
                        <div class="pq-masonry " data-next_items="3" data-initial_items="6">
                           <div class="grid-sizer pq-col-3"></div>
                           <div class="row">

                           @foreach ($gal as $gallery)

                            <div class="pq-masonry-item pq-filter-items  col-md-4  {{$gallery->tag_id}} ">
                                <div class="pq-portfoliobox pq-style-1">
                                  <div class="pq-portfolio-img"> <img src="/gallery/{{$gallery->image}}" class="img-fluid" alt="">
                                      <a href="/gallery/{{$gallery->image}}">

                                      </a>
                                   </div>

                                  <div class="pq-portfolio-icon"><i class="ion ion-plus-round"></i>{{$gallery->details}}</div>
                                  </div>
                                </div>
                             </div>


                           @endforeach
                        </div>


                        </div>
                     </div>
                     <div class="pq-btn-load-container text-center">
                        <a id="showMore" class="pq-button" href="make-appoinment.html">
                           <div class="pq-button-block"> <span class="pq-button-text">Load More</span> <i class="ion ion-plus-round"></i> </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
               porfolio end
           ================================= -->
@endsection
