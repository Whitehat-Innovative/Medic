<x-app-layout>

    <x-slot name='slot'>


        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Blog 
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>Zolive</a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html"> Single Blog</a></li>
                            <li class="breadcrumb-item active">Single Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12 left-box">

                            
                            <div class="card single_post">
                                <div class="body">
                                    <h3 class="m-t-0 m-b-5"><a href="blog-details.html">{{$blog->title}}</a></h3>
                                    <ul class="meta">
                                        <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: {{$blog->author}}</a></li>
                                        
                                        <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: {{$blog->comments->count()}}</a></li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="img-post m-b-15">
                                        <img src="/Blog-image/{{$blog->images}}" alt="Awesome Image">
                                        <div class="social_share">
                                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                            {{-- <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                       --}} </div> 
                                    </div>
                                    <p>{{$blog->content}}</p>
                                    {{-- <a href="{{route('blog.edit.view', $blog)}}" title="read more" class="btn btn-round btn-info">Read More</a> --}}
                                    <a href="{{route('blog.edit.view', $blog)}}"  title="read more" class="btn btn-round btn-info">Edit</a>
                                    <a href="{{route('blog.delete', $blog)}}" title="read more" class="btn btn-round btn-info">Delete</a>
                                </div>
                            </div>
                            



                    </div>
                   
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

    </x-app-layout>


