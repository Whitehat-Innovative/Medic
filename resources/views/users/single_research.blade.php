@extends('layouts.users.app')
@section('description')
@section('{{Str::slug($blog->title)}}')

@section('content')


<!--=================================
         Banner start-->
<div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg'); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>{{$r->title}}</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fas fa-home mr-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Research</li>
                            <li class="breadcrumb-item active">{{$r->title}}</li>
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
               Blog-single start-->
<div class="blog-single pq-pt-130 pq-pb-210">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="pq-blog-post">
                    <div class="pq-post-media"> <img src="/Research-image/{{$r->image}}" class="img-fluid"
                            alt="medicate">
                        <div class="pq-post-date">
                            <a href="#"> <span>{{$r->created_at->diffForHumans()}}</span> </a>
                        </div>
                    </div>
                    <div class="pq-blog-contain">
                        <div class="pq-post-meta">
                            <ul>
                                <li class="pq-post-author"><i class="fa fa-user"></i>{{$r->author}}</li>

                            </ul>
                            <div >

                                <p> {{$r->content}}</p>

                                </div>
                        </div>


                        {{-- <h4 class="pq-heading-title pq-size-default">Results Are Easy To Obtain</h4>
                           <p> Medicate is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                           <div class="row mt-4">
                              <div class="col-lg-6 col-md-6">
                                 <div class="blog-img text-center"> <img src="/assets/images/blog/single-blog-1.jpg" title="12" class="img-fluid" alt="blogimage"> </div>
                              </div>
                              <div class="col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-4">
                                 <div class="blog-img text-center"> <img src="/assets/images/blog/single-blog-2.jpg" title="4" class="img-fluid" alt="blogimage"> </div>
                              </div>
                           </div>
                           <p class="mt-4"> Reader distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                           <h4 class="pq-heading-title pq-size-default">Expert Recommendations</h4>
                           <div class="pq-text-editor pq-clearfix"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. </div>
                           <div class="mt-4">
                              <blockquote>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                 <p><strong>– Michal Smart</strong></p>
                              </blockquote> --}}
                    </div>

                </div>


            </div>
            <div class="col-lg-4 mt-lg-0 mt-5">
                <div class="Sidebar-style-2">

                    <div class="pq-widget pq-widget_media_image">
                        <div class="pq-block-group">
                            <div class="pq-block-group__inner-container">
                                <figure class="pq-block-image size-full is-style-default"><img
                                        src="/assets/images/calendar.jpg" alt="" class="img-fluid"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="pq-widget pq-widget_block">
                        <div class="pq-button-block">
                            <a href="{{route('donate')}}" class="pq-button pq-button-flat"> <span class="text">Donate Now</span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #comments -->
        </div>

    </div>
</div>
</div>
<!--=================================
               blog-single end-->

@endsection
