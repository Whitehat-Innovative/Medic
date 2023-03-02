<x-app-layout>
    <x-slot name="slot">
        <section class="content">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Gallery
                            <small class="text-muted">Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Gallery</a></li>
                            <li class="breadcrumb-item active">All images for this tag</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">



                    @foreach ($ima as $image)
                    <div class="col-lg-4 col-md-4 col-sm-6">

                        <div class="card">
                            <div class="header">
                                <span>

                                    <p>Image Details</p>

                                </span>
                            </div>
                            <div class="body">

                                <div class="row clearfix container">
                                    <a href="/gallery/{{$image}}">
                                    <img src="/gallery/{{$image}}" class="" alt="">
                                </a>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-round"><a href="{{route('gallery')}}">Check
                                    these images out in your guest Gallery Page!!</a></button>

                        </div>
                    </div>

                    @endforeach


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
