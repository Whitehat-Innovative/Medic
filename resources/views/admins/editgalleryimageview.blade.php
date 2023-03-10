

<x-app-layout>
    <x-slot name="slot">
        <section class="content">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Edit Image
                        <small class="text-muted">Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Image</a></li>
                            <li class="breadcrumb-item active">Edit Image From Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form action="{{route('edit.gallery.image', [$photoo, $imagess])}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="card">
                                <div class="header">
                                    <span>

                                        <p>Image</p>

                                    </span>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="image" >
                                            </div>
                                        </div>

                                    </div>

                                        <button class="btn danger" type="submit">save</button>




                                </div>
                            </div>

                        </form>

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



