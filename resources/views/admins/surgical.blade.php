<x-app-layout>

    <x-slot name='slot'>

        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Surgical Outreaches
                            <small>Welcome to ZOLIVE</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> ZOLIVE</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Surgical Outreaches</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="{{route('outreaches.post')}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body">


                                    <div class="form-group">
                                        <textarea name="description" class="form-control"  id="" placeholder="Enter Description Content" cols="20" rows="10"> </textarea>
                                        {{-- <input type="text" class="form-control" name="content"  placeholder="Enter Blog title" /> --}}
                                    </div>


                                    <div class="form-group">
                                        <input type="date" class="form-control" name="start_date"  placeholder="Enter Time Duration" />
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="end_date"  placeholder="Enter Time Duration" />
                                    </div>


                                    <div class="  mt-4 mb-2">
                                        <label for="image" class="header"> INSERT IMAGES OR DOCUMENTS IN-LINE WITH YOUR RESEARCH</label>
                                        <input name="image" type="file"  accept="image*/"  multiple />
                                    </div>

                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Post Content</button>

                                </div>
                            </form>
                        </div>
                        {{-- <div class="card">
                            <div class="body">

                                <button type="button"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Post</button>
                            </div>
                        </div> --}}
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
