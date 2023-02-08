<x-app-layout>
    <x-slot name="slot">
        <section class="content contact">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Contact
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                                            href="#Doctors">All Admin</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        {{-- <div class="card action_bar">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-1 col-md-2 col-3">
                                        <div class="checkbox inlineblock delete_all">
                                            <input id="deleteall" type="checkbox">
                                            <label for="deleteall">
                                                All
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-6">
                                        <div class="input-group search">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-addon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-3 text-right">
                                        <div class="btn-group d-none d-md-inline-block" role="group">
                                            <div class="btn-group">
                                                <button type="button" class="btn col-black btn-neutral dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="zmdi zmdi-label"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right pullDown">
                                                    <li>
                                                        <a href="javascript:void(0);">Family</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Work</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Google</a>
                                                    </li>
                                                    <li role="separator" class="divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0);">Create a Label</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="btn col-black btn-neutral d-none d-md-inline-block">
                                            <i class="zmdi zmdi-plus-circle"></i>
                                        </button>
                                        <button type="button"
                                            class="btn col-black btn-neutral d-none d-md-inline-block">
                                            <i class="zmdi zmdi-archive"></i>
                                        </button>
                                        <button type="button" class="btn col-black btn-neutral">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                                                        {{-- <th>Address</th> --}}
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($u as $users)


                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <input id="adelete_2" type="checkbox">
                                                                <label for="adelete_2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="/assets/images/xs/avatar1.jpg"
                                                                class="rounded-circle avatar" alt="">
                                                            <p class="c_name">{{$users->name}}</p>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-account-box-phone m-r-10"></i>{{$users->email}}</span>
                                                        </td>
                                                        {{-- <td>
                                                            <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                        </td> --}}
                                                        <td class="flex">




                                                            
                                                            @if ($users->code==007)

                                                            <a onclick="confirmation(event)" class="btn btn-icon btn-neutral btn-icon-mini "
                                                                         href="{{route('delete', $users->id)}}"><i
                                                                            class="zmdi zmdi-delete mt-1"></i></a>


                                                          
                                                            <button class="btn btn-icon btn-neutral btn-icon-mini">
                                                                <a href="{{route('edit.view', $users)}}"><i
                                                                        class="zmdi zmdi-edit"></i></a></button>


                                                            @endif




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
                                   {{$u->links()}}>
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
              title: "Are you sure to DELETE this user",
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
