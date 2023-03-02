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
<section class="1-colume-grid pq-pb-210">
    <div class="container">
        <div class="pq-blog pq-blog-col-1">
            <div class="row">
                @foreach ($re as $rea)

                <div class="col-lg-3">
                    <div class="pq-blog-post">
                        <div class="pq-blog-img"
                            style="background-image:url('/Research-image/{{$rea->image}}'); background-attachment: contain;">
                            {{-- <div class="pq-post-date">
                                 <a href="#"> <span>{{$rea->created_at}}</span></a>
                        </div> --}}
                    </div>
                    <div class="pq-blog-contain">
                        <div class="pq-post-meta">
                            <ul>
                                <li class="pq-post-author"><i class="fa fa-user"></i>{{$rea->author}}</li>

                            </ul>
                        </div>
                        <h5 class="pq-blog-title"><a href="#">{{$rea->title}}</a>
                        </h5>
                        <div class="pq-blog-info">
                            <p>{{Str::substr($rea->content, 0,15)}}</p>
                        </div>
                        <div class="pq-btn-container">
                            <a href="{{route('single.research.view', [$rea->id, Str::slug('Zolive'.$rea->title)])}}" class="pq-button pq-button-flat">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i
                                        class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
@endsection
