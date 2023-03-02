<x-app-layout>
    <x-slot name="slot">
        <section class="content contact">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Donation
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Donations</a></li>
                            <li class="breadcrumb-item active">All donations</li>
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
                                            href="#Doctors">Donations</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card action_bar">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-1 col-md-2 col-3">
                                        <label for="deleteall">
                                        All Donations
                                    </label>
                                        {{-- <div class="checkbox inlineblock delete_all">
                                            <input id="deleteall" type="checkbox">

                                        </div> --}}
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-6">
                                        {{-- <div class="input-group search">
                                            <form action="{{route('search')}}"></form>
                                            <input type="search" class="form-control" name="search" placeholder="Search...">
                                            <button type="submit" > <span class="input-group-addon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span> </button>

                                        </div> --}}
                                    </div>

                                </div>
                            </div>
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
                                                        <th>Donor Name</th>
                                                        <th>Anonymous Donor Name</th>
                                                        {{-- <th>Patient</th> --}}
                                                        <th>Email</th>
                                                        <th> Amount Paid </th>
                                                        <th>Current Fund</th>
                                                        <th>Status</th>
                                                        <th>Ref</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($don as $donation)


                                                    <tr>
                                                        <td>
                                                            {{-- <div class="checkbox">
                                                                <input id="adelete_2" type="checkbox">
                                                                <label for="adelete_2">&nbsp;</label>
                                                            </div> --}}
                                                        </td>
                                                        <td>
                                                            <img src="/adminassets/images/xs/avatar1.jpg"
                                                                class="rounded-circle avatar" alt="">
                                                            <p class="c_name">{{$donation->donor_name}}</p>
                                                        </td>
                                                        <td>
                                                            <img src="/adminassets/images/xs/avatar1.jpg"
                                                                class="rounded-circle avatar" alt="">
                                                            <p class="c_name">{{$donation->anonimous_donor}}</p>
                                                        </td>

                                                        {{-- <td>
                                                            <span class="phone"><i
                                                                    class="zmdi  m-r-10"></i>{{$donation->patient->name}}</span>
                                                        </td> --}}
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-account-box-phone m-r-10"></i>{{$donation->email}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-money  m-r-10"></i>₦{{number_format($donation->amount)}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-money-box  m-r-10"></i>₦{{number_format($donation->current_fund)}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi  m-r-10"></i>{{$donation->status}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi  m-r-10"></i>{{$donation->reference}}</span>
                                                        </td>
                                                        {{-- <td>
                                                            <address><i class=""></i>123 6th St. Melbourne, FL 32904</address>
                                                        </td> --}}
                                                        <td class="flex">



{{--

                                                                    <form  class="btn btn-icon btn-neutral btn-icon-mini" action="{{route('delete.donation', $donation)}} " method="POST">


                                                                        @csrf

                                                                        <button class="btn btn-icon btn-neutral btn-icon-mini" type="submit" data-toggle="modal" data-target="#defaultModal"><i
                                                                            class="zmdi zmdi-delete"></i></button>



                                                                    </form> --}}

                                                                    <a onclick="confirmation(event)" class="btn btn-icon btn-neutral btn-icon-mini "
                                                                         href="{{route('delete.donation', $donation->id)}}"><i
                                                                            class="zmdi zmdi-delete mt-1"></i></a>
                                                                     {{-- <button class="btn btn-icon btn-neutral btn-icon-mini" >
                                                                        <a href="{{route('edit.dview', $donation)}}"><i class="zmdi zmdi-edit" ></i></a></button>  --}}


                                                        </td>
                                                    </tr>



                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <ul class="pagination pagination-primary m-b-0">
                                   {{$don->links()}}
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
              title: "Are you sure you want to DELETE this donation ",
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
