<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>New Location
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">location</a></li>
                            <li class="breadcrumb-item active">New location</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <label for="image" class="header mt-2 mb-2">ENTER NEW LOCATION</label>
                            <form action="{{route('add.location')}}"
                                method="POST" >
                                @csrf
                                <div class="body">

                                <label for="" class="header mt-2 mb-2"> Enter location name </label>


                                    <div class="form-group">
                                        <input class="form-control" name="name"  placeholder="Enter New Location" />
                                        {{-- <input type="text" class="form-control" name="description"  placeholder="Enter New Description" /> --}}
                                    </div>


                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Post</button>




                                </div>
                                <label for="" class="header mt-2 mb-2"> ALL LOCATIONS ALREADY IN THE SYSTEM </label>

                                <select name=""  class="mt-2">
                                    <option selected disabled>All Locations Available--</option>
                                    @foreach ($l as $location)
                                    <option disabled>{{$location->name}}</option>
                                    @endforeach

                                </select>



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
