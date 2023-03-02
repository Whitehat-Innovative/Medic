<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>New Gallery
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Gallery</a></li>
                            <li class="breadcrumb-item active">New Image to Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <label for="image" class="header mt-2 mb-2">ENTER NEW IMAGE</label>
                            <form action="{{route('add.image')}}"
                                method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="body">

                                <label for="image" class="header mt-2 mb-2"> Enter one or more image(s) here </label>

                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image[]" multiple />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="details"  placeholder=" Image Detail" />
                                        {{-- <input type="text" class="form-control" name="description"  placeholder="Enter New Description" /> --}}
                                    </div>
                                    <div class="form-group">
                                        <select name="tags" id="tags">
                                            <option disabled selected value="">Select Tags</option>
                                            <option value="30">Clinic</option>
                                            <option value="36">Family</option>
                                            <option value="32">Laboratory</option>
                                            <option value="33">Pediatrics</option>
                                            <option value="34">Therapy</option>
                                            <option value="37">Surgery</option>
                                        </select>
                                    </div>


                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Post Image</button>
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
