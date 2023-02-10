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
                        <h2 class="pq-section-title">All Blog Post </h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i
                                        class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
               2-colume-grid start-->
<section class="1-colume-grid pq-pb-210">
    <div class="container">
        <div class="pq-blog pq-blog-col-1">
            <div class="row">
                @foreach ($blo as $blog)


                <div class="col-lg-3">
                    <div class="pq-blog-post">
                        <div class="pq-blog-img"
                            style="background-image:url('/Blog-image/{{$blog->images}}'); background-attachment: contain;">
                            {{-- <div class="pq-post-date">
                                 <a href="#"> <span>{{$blog->created_at}}</span></a>
                        </div> --}}
                    </div>
                    <div class="pq-blog-contain">
                        <div class="pq-post-meta">
                            <ul>
                                <li class="pq-post-author"><i class="fa fa-user"></i>{{$blog->author}}</li>
                                <li class="pq-post-comment"> <a href="get-the-exercise-limited-mobility.html"><i
                                            class="fa fa-comments"></i>
                                        {{$blog->comments->count()}} {{Str::plural('Comment',$blog->comments->count())}} </a> </li>
                            </ul>
                        </div>
                        <h5 class="pq-blog-title"><a href="get-the-exercise-limited-mobility.html">{{$blog->tilte}}</a>
                        </h5>
                        <div class="pq-blog-info">
                            <p>{{$blog->content}}</p>
                        </div>
                        <div class="pq-btn-container">
                            <a href="{{route('single_blog', $blog)}}" class="pq-button pq-button-flat">
                                <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i
                                        class="ion ion-plus-round"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach
            <div class="row container">

                <div class="col-4">
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="pq-pagination">
                            <nav aria-label="Page navigation">
                                <ul class="page-numbers">

                                    <li><a class="" href="#">{{$blo->links()}}</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!--=================================
               2-colume-grid end-->



@endsection
