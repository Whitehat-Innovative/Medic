<x-app-layout>
    <x-slot name="slot">

        <!-- Main Content -->
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Dashboard
                            <small>Welcome to ZOLIVE</small>
                        </h2>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 text-right">

                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="body">
                                <h3 class="number count-to m-b-0" data-from="0" data-to="{{$pa->count()}}" data-speed="2500"
                                    data-fresh-interval="700">{{$pa->count()}}<i class="zmdi zmdi-trending-up float-right"></i>
                                </h3>
                                <p class="text-muted">Patients</p>
                                {{-- <div class="progress">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="68"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <small>Change 15%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="body">
                                <h3 class="number count-to m-b-0" data-from="0" data-to="{{$d->count()}}" data-speed="2500"
                                    data-fresh-interval="1000">{{$d->count()}}<i class="zmdi zmdi-trending-up float-right"></i>
                                </h3>
                                <p class="text-muted">Donations</p>
                                {{-- <div class="progress">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="68"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <small>Change 23%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="body">
                                <h3 class="number count-to m-b-0" data-from="0" data-to="{{$b->count()}}" data-speed="2500"
                                    data-fresh-interval="1000">{{$b->count()}}<i class="zmdi zmdi-trending-up float-right"></i>
                                </h3>
                                <p class="text-muted">Blogs <i class="zmdi zmdi-mood"></i></p>
                                {{-- <div class="progress">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="68"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <small>Change 50%</small> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    @foreach ($a as $appointment)

                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Dr's.</strong> Appointment</h2>
                                <ul class="header-dropdown">
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="new_timeline">
                                    <div class="header">
                                        <div class="color-overlay">
                                            <div class="day-number">{{$appointment->created_at->format('d')}}</div>
                                            <div class="date-right">
                                            <div class="day-name">{{$appointment->email}}</div>
                                            <div class="month">{{$appointment->created_at->diffForHumans()}}</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

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
