<x-app-layout>

    <x-slot name='slot'>


        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Research
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Research</a></li>
                            <li class="breadcrumb-item active">Single Research</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12 left-box">


                            <div class="card single_post">
                                <div class="body">
                                    <h3 class="m-t-0 m-b-5"><a href="#">{{$re->title}}</a></h3>
                                    <ul class="meta">
                                        {{-- <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Sex: {{$->sex}}</a></li> --}}
                                        <li><a href="#"><i class="zmdi zmdi-label col-green"></i>{{$re->author}}</a></li>

                                    </ul>
                                </div>
                                <div class="body">
                                    <h3 class="m-t-0 m-b-5"><a href="#">Research Content</a></h3>


                                    <p>{{$re->content}}</p>

                                    <a href="{{route('delete.research', $re)}}" onclick="confirmation(event)"  class="btn btn-round btn-info">Delete</a>
                                    <a href="{{route('research.edit.view', $re)}}" class="btn btn-round btn-info">Edit</a>
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
              title: "Are you sure to Delete this Research",
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


