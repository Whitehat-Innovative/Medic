@extends('layouts.users.app')

@section('content')


<!--=================================
         Banner start-->
<div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg');">
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
                    <div class="pq-post-media"> <img src="/Blog-image/{{$blog->image}}" class="img-fluid"
                            alt="medicate">
                        <div class="pq-post-date">
                            <a href="#"> <span>{{$blog->created_at->diffForHumans()}}</span> </a>
                        </div>
                    </div>
                    <div class="pq-blog-contain">
                        <div class="pq-post-meta">
                            <ul>
                                <li class="pq-post-author"><i class="fa fa-user"></i>{{$blog->author}}</li>
                                <li class="pq-post-tag"><a href="#"><i class="fa fa-comments"></i>2 Comments</a></li>
                            </ul>
                        </div>
                        <p> {{$blog->content}}</p>
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
                    <h3 class="comments-title">2 Comment </h3>
                    <ol class="commentlist">
                        <li class="comment even thread-even depth-1">
                            <div class="comment-body">
                                <div class="pq-comment-info">
                                    <div class="pq-comment-wrap">
                                        <div class="pq-comment-avatar"> <img src="/assets/images/blog/user.png" class=""
                                                alt=""> </div>
                                        <div class="pq-comment-box">
                                            <h5 class="title">Admin</h5>
                                            <div class="pq-comment-metadata"> </div>
                                            <!-- .comment-metadata -->
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <!-- .comment-content -->
                                        </div>
                                        <!-- .comment-author -->
                                        <div class="reply"> <a rel="nofollow" class="comment-reply-link" href="#"
                                                data-commentid="2" data-postid="7401" data-belowelement="div-comment-2"
                                                data-respondelement="respond" data-replyto="Reply to Thomas Luis"
                                                aria-label="Reply to Thomas Luis">Reply</a> </div>
                                        <!-- .reply -->
                                    </div>
                                </div>
                            </div>
                            <!-- .comment-body -->
                            <ol class="children">
                                <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
                                    <div class="comment-body">
                                        <div class="pq-comment-info">
                                            <div class="pq-comment-wrap">
                                                <div class="pq-comment-avatar"> <img src="/assets/images/blog/user.png"
                                                        class="" alt=""> </div>
                                                <div class="pq-comment-box">
                                                    <h5 class="title">
                                                        <a href="index.html" rel="external nofollow ugc"
                                                            class="url">admin</a>
                                                    </h5>
                                                    <div class="pq-comment-metadata"> </div>
                                                    <!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                    <!-- .comment-content -->
                                                </div>
                                                <!-- .comment-author -->
                                                <div class="reply"> <a rel="nofollow" class="comment-reply-link" href="#"
                                                        data-commentid="3" data-postid="7401"
                                                        data-belowelement="div-comment-3" data-respondelement="respond"
                                                        data-replyto="Reply to admin" aria-label="Reply to admin">Reply</a>
                                                </div>
                                                <!-- .reply -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .comment-body -->
                                </li>
                                <!-- #comment-## -->
                            </ol>
                            <!-- .children -->
                        </li>
                        <!-- #comment-## -->
                    </ol>
                    <!-- .commentlist -->
                    <div class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title mt-4">Write a Reply or Comment </h3>
                        <form method="post" class="comment-form pq-applyform" novalidate>
                            <p class="comment-notes"><span>Your email address will not be published.</span> <span
                                    class="required-field-message" aria-hidden="true">Required fields are marked <span
                                        class="required" aria-hidden="true">*</span></span></p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <input id="author" class="name-field" name="author" type="text"
                                        placeholder=" Enter Name" required>
                                </div>
                                <div class="col-lg-4">
                                    <input id="e-mail" class="e-mail-field" name="email" type="text"
                                        placeholder=" Enter Email" required>
                                </div>
                                <div class="col-lg-4">
                                    <input id="url" name="url" type="text" placeholder="Enter Url">
                                </div>
                                <div class="col-lg-12">
                                    <textarea id="message" name="comment" cols="60" rows="6"
                                        placeholder=" Enter Your Comment"></textarea>
                                </div>
                            </div>
                            <a class="pq-button mb-0 form-btn">Post comment</a>
                        </form>
                    </div>
                    <!-- #respond -->
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
                            <a href="index.html" class="pq-button pq-button-flat"> <span class="text">Donate Now</span> </a>
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
