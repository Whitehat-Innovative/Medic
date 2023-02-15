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
                        <h2>{{$blog->title}}</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Blog</li>
                            <li class="breadcrumb-item active">{{$blog->title}}</li>
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
                    <div class="pq-post-media"> <img src="/Blog-image/{{$blog->images}}" class="img-fluid"
                            alt="medicate">
                        <div class="pq-post-date">
                            <a href="#"> <span>{{$blog->created_at->diffForHumans()}}</span> </a>
                        </div>
                    </div>
                    <div class="pq-blog-contain">
                        <div class="pq-post-meta">
                            <ul>
                                <li class="pq-post-author"><i class="fa fa-user"></i>{{$blog->author}}</li>
                                <li class="pq-post-tag"><a href="#"><i
                                            class="fa fa-comments"></i>{{$blog->comments->count()}}
                                        {{Str::plural('Comment',$blog->comments->count())}}</a></li>
                            </ul>
                            <div >

                                <p> {{$blog->content}}</p>

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

                <div id="comments" class="pq-comment-area">
                    {{-- <h3 class="comments-title">{{$blog->commets->count()}} Comment </h3> --}}
                    @foreach ($c->paginate(2) as $ca)

                    <ol class="commentlist">
                        <li class="comment even thread-even depth-1">
                            <div class="comment-body">
                                <div class="pq-comment-info">
                                    <div class="pq-comment-wrap">

                                        <div class="pq-comment-box">

                                            <div class="row container">
                                                <div class="col-lg-12 d-flex">
                                                    <div class="col-lg-6">
                                                     <h5 class="title mb-2">Author: {{$ca->name}}</h5>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    </div>
                                                    <div class="col-lg-3">
                                                     <p class="comment-content">{{$ca->created_at->diffForHumans()}}</p>
                                                    </div>
                                                </div>
                                                <div class=" form-control comment-content">
                                                    <p>{{$ca->comment}}</p>
                                                </div>
                                            </div>

                                            {{-- <div class="pq-comment-metadata"></div> --}}
                                            <!-- .comment-metadata -->

                                            <!-- .comment-content -->



                                            <label class="m-4" for="REPLIES"> <span> REPLIES</span> </label>

                                            @foreach ($ca->replies as $reply)

                                            <div class="row container">
                                                <div class="col-lg-12 mt-2 d-flex">
                                                    <div class="col-lg-6  ">
                                                     <h5 class="title"> {{$reply->name}}</h5>
                                                    </div>
                                                    <div class="col-lg-3 ">

                                                    </div>

                                                    <div class="col-lg-3">
                                                     <p class="comment-content">{{$reply->created_at->diffForHumans()}}</p>
                                                    </div>
                                                </div>
                                                <div class=" form-control comment-content">
                                                    <p>{{$reply->reply}}</p>
                                                </div>
                                            </div>
                                            @endforeach

                                            <div class="col-lg-12 d-flex mt-2 ">

                                                <form action="{{route('add.reply', $ca->id)}}" method="POST" class="col-lg-12 d-flex">

                                                  @csrf
                                                  <div class="row container d-flex">
                                                    <div class="col-6 d-flex">

                                                        <input class="form-control " name="name" type="text"
                                                        placeholder=" Enter your name">
                                                       <input class="form-control" name="reply" type="text"
                                                        placeholder=" Enter your reply">


                                                    </div>

                                                    <div class="col-3"></div>

                                                    <div class="col-3">
                                                     <span class="text mt-1 ">  <x-button type="submit" class="btn btn- form-control">Reply</x-button></span>
                                                    </div>

                                                  </div>




                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- #comment-## -->



                    </ol>

                    @endforeach



                    @guest
                    <!-- .commentlist -->
                    <div class="comment-respond ">
                        <h3 id="reply-title" class="comment-reply-title mt-4">Write a Comment </h3>
                        <form method="POST" action="{{route('add.comment')}}" class="comment-form pq-applyform"
                            novalidate>
                            @csrf
                            <p class="comment-notes"><span>Your email address will not be published.</span>
                                <div class="row">



                                    <div class="col-lg-4">
                                        <input class="form-control" name="name" type="text"
                                            placeholder=" Enter Guest name">
                                    </div>



                                    <div class="col-lg-4">
                                        <input class="form-control" name="blog_id" type="hidden" value="{{$blog->id}}">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-control" name="email" type="email"
                                            placeholder=" Enter Email">
                                    </div>


                                    <div class="col-lg-12">
                                        <textarea id="message" name="comment" cols="60" rows="6"
                                            placeholder=" Enter Your Comment"></textarea>
                                    </div>
                                </div>
                                <button class="btn pq-button mb-0 form-btn" type="submit">Post Comment</button>

                        </form>




                    </div>

                    @endguest
                    <!-- #respond -->
                    @auth
                    <!-- .commentlist -->
                    <div class="comment-respond ">
                        <h3 id="reply-title" class="comment-reply-title mt-4">Write a Comment </h3>
                        <form method="POST" action="{{route('add.comment')}}" class="comment-form pq-applyform"
                            novalidate>
                            @csrf
                            {{-- <p class="comment-notes"><span>Your email address will not be published.</span>         --}}
                            <div class="row">



                                <div class="col-lg-4">
                                    <input class="form-control" name="name" value="Admin" type="hidden"
                                        placeholder=" Enter Guest name">
                                </div>



                                <div class="col-lg-4">
                                    <input class="form-control" name="blog_id" type="hidden" value="{{$blog->id}}">
                                </div>
                                <div class="col-lg-4">
                                    <input class="form-control" name="email" type="email" placeholder=" Enter Email">
                                </div>


                                <div class="col-lg-12">
                                    <textarea id="message" name="comment" cols="60" rows="6"
                                        placeholder=" Enter Your Comment"></textarea>
                                </div>
                            </div>
                            <button class="btn pq-button mb-0 form-btn" type="submit">Post Comment</button>

                        </form>




                    </div>
                    <!-- #respond -->

                    @endguest
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-5">
                <div class="Sidebar-style-2">

                    <div class="pq-widget pq-widget_media_image">
                        <div class="pq-block-group">
                            <div class="pq-block-group__inner-container">
                                <figure class="pq-block-image size-full is-style-default"><img
                                        src="/assets/images/call-img.jpg" alt="" class="img-fluid"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="pq-widget pq-widget_block">
                        <div class="pq-button-block">
                            <a href="index.html" class="pq-button pq-button-flat"> <span class="text">Donate Now</span>
                            </a>
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
