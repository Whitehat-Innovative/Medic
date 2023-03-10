<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>New Tag
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Gallery</a></li>
                            <li class="breadcrumb-item active">New Tag</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <label for="image" class="header mt-2 mb-2">ENTER NEW TAG</label>
                            <form action="{{route('add.gallery.tag')}}"
                                method="POST" >
                                @csrf
                                <div class="body">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag"  placeholder="Enter New Tag" />
                                    </div>

                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Add</button>

                                </div>
                                <label for="image" class="header mt-2 mb-2"> ALL TAGS ALREADY IN THE SYSTEM </label>

                                <select name=""  class="mt-2">
                                    <option selected disabled>All Tags Available--</option>
                                    @foreach ($tag as $tags)
                                    <option disabled>{{$tags->tag}}</option>
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
