<x-app-layout>
    <x-slot name="slot">

        <section class="content contact">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>All Appointments
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Appointments</a></li>
                            <li class="breadcrumb-item active">All Appointments </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <ul class="nav nav-tabs padding-0">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#Doctors">All Appointments</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card action_bar">

                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="Doctors">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0 c_list">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Date</th>
                                                        <th>Appointment Note</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($app as $a)
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <input id="adelete_2" type="checkbox">
                                                                <label for="adelete_2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{-- <img src="/assets/images/xs/avatar1.jpg"
                                                                class="rounded-circle avatar" alt=""> --}}
                                                            <p class="c_name">{{$a->name}}</p>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-account-box-phone m-r-10"></i>{{$a->email}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi  m-r-10"></i>{{$a->created_at->diffForHumans()}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi  m-r-10"></i>{{$a->appointment_note}}</span>
                                                        </td>

                                                        {{-- <td>
                                                            <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                        </td> --}}
                                                        <td class="flex">

                                                                        <a onclick="confirmation(event)" class="btn btn-icon btn-neutral btn-icon-mini "
                                                                         href="{{route('delete.appointment', $a->id)}}"><i
                                                                            class="zmdi zmdi-delete mt-1"></i></a>


                                                                    <button class="btn btn-icon btn-neutral btn-icon-mini" >
                                                                        <a href="{{route('single.appointment', $a)}}"><i class="zmdi zmdi-eye" ></i></a></button>

                                                                    {{-- <button class="btn btn-icon btn-neutral btn-icon-mini" >
                                                                        <a href="{{route('single.patient.view', $patient)}}"><i class="zmdi zmdi-eye" ></i></a></button> --}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- <button type="button" class="btn btn-default waves-effect m-r-20"
                                        data-toggle="modal" data-target="#defaultModal">MODAL - DEFAULT SIZE</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <ul class="pagination pagination-primary m-b-0">
                                   {{$app->links()}}
                                </ul>
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
              title: "Are you sure to DELETE this appointment",
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
