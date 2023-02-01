<x-app-layout>

    <x-slot name='slot'>


        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Blog List
                            <small>Welcome to Oreo</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                            <li class="breadcrumb-item active">Blog List</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12 left-box">
                        
                            @foreach ($blo as $blog)
                            <div class="card single_post">
                                <div class="body">
                                    <h3 class="m-t-0 m-b-5"><a href="blog-details.html">{{$blog->title}}</a></h3>
                                    <ul class="meta">
                                        <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: {{$blog->author}}</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-label col-green"></i>Web Design</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="img-post m-b-15">
                                        <img src="/adminassets/images/blog/blog-page-4.jpg" alt="Awesome Image">
                                        <div class="social_share">
                                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                        </div>
                                    </div>
                                    <p>{{$blog->content}}</p>
                                    <a href="{{route('blog.edit.view', $blog)}}" title="read more" class="btn btn-round btn-info">Read More</a>
                                    <a href="{{route('blog.edit.view', $blog)}}" title="read more" class="btn btn-round btn-info">Edit</a>
                                </div>
                            </div>
                            @endforeach


                        <ul class="pagination pagination-primary">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-12 right-box">
                        <div class="card">
                            <div class="body search">
                                <div class="input-group m-b-0">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Popular</strong> Posts</h2>
                            </div>
                            <div class="body widget popular-post">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="border single_post">
                                            <div class="img-post m-b-5">
                                                <img src="/adminassets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                                            </div>
                                            <p class="m-b-0">Post with the most comments</p>
                                            <small>Dec 20, 2017</small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Category</strong> Clouds</h2>
                            </div>
                            <div class="body widget tag-clouds">
                                <ul class="list-unstyled m-b-0">
                                    @foreach ($cat as $category)
                                    <li><a href="{{route('cat.blog',$category)}}" class="tag badge badge-success">{{$category->category}}</a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                      
                       
                    </div>
                </div>
            </div>
        </section>



    </x-slot>

    </x-app-layout>


