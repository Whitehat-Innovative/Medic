<x-layouts-app>

<x-slot name='slot'>


    <section class="content blog-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-sm-12">
                    <h2>Research List
                        <small>Welcome to Zolive</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a></li>
                        <li class="breadcrumb-item"><a href="blog-dashboard.html">Research</a></li>
                        <li class="breadcrumb-item active">Research List</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                            <ul class="meta">
                                <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                                <li><a href="#"><i class="zmdi zmdi-label col-red"></i>Photography</a></li>
                                <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="img-post m-b-15">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="/assets/images/blog/blog-page-1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="/assets/images/blog/blog-page-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="/assets/images/blog/blog-page-3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="social_share">
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                </div>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                            <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>
                        </div>
                    </div>

                    <ul class="pagination pagination-primary">
                       {{links()}}
                    </ul>
                </div>
                {{-- <div class="col-lg-4 col-md-12 right-box">
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
                                            <img src="/assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                                        </div>
                                        <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                        <small>Dec 20, 2017</small>
                                    </div>
                                    <div class="border single_post m-t-20">
                                        <div class="img-post m-b-5">
                                            <img src="/assets/images/blog/blog-page-3.jpg" alt="Awesome Image">
                                        </div>
                                        <p class="m-b-0">new rules, more cars, more races</p>
                                        <small>Dec 20, 2017</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Tag</strong> Clouds</h2>
                        </div>
                        <div class="body widget tag-clouds">
                            <ul class="list-unstyled m-b-0">
                                <li><a href="#" class="tag badge badge-default">Design</a></li>
                                <li><a href="#" class="tag badge badge-success">Project</a></li>
                                <li><a href="#" class="tag badge badge-info">Creative UX</a></li>
                                <li><a href="#" class="tag badge badge-success">Wordpress</a></li>
                                <li><a href="#" class="tag badge badge-warning">HTML5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Instagram</strong> Post</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled instagram-plugin m-b-0">
                                <li><a href="#"><img src="/assets/images/blog/05-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/06-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/07-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/08-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/09-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/10-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/11-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/12-img.jpg" alt="image description"></a></li>
                                <li><a href="#"><img src="/assets/images/blog/13-img.jpg" alt="image description"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Email</strong> Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                        </div>
                        <div class="body widget newsletter">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

</x-slot>

<x-slot name="script">

    <script>
    function confirmation(ev) {
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');
      console.log(urlToRedirect);
      swal({
          title: "Are you sure to cancel this product",
          text: "You will not be able to revert this!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willCancel) => {
          if (willCancel) {

              window.location.href = urlToRedirect;

          }


      });


  }
</script>
</x-slot>

</x-layouts-app>


