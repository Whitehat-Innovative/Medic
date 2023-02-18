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
                        <h2 class="pq-section-title">All Research Post </h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i
                                        class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item active">Research</li>
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
<!---2-colume-grid start-->

<!--=================================
                                      2-colume-grid end-->
@endsection
