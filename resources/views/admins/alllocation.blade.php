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
                                        <button type="submit"> <span class="input-group-addon">
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
                                                    <th>Location Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($l as $location)


                                                <tr>

                                                    <td>
                                                        <span class="phone">#</span>
                                                    </td>
                                                    <td>
                                                        <span class="phone"><i
                                                                class="zmdi zmdi-account-box-phone m-r-10"></i>{{$location->name}}</span>
                                                    </td>

                                                    <td class="flex">

                                                        <a onclick="confirmation(event)"
                                                            class="btn btn-icon btn-neutral btn-icon-mini "
                                                            href="{{route('delete.location', $location->id)}}"><i
                                                                class="zmdi zmdi-delete mt-1"></i>
                                                        </a>
                                                        
                                                        <button class="btn btn-icon btn-neutral btn-icon-mini" >
                                                            <a href="{{route('edit.location.view', $location->id)}}"><i class="zmdi zmdi-edit" ></i></a></button>


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
                                {{-- {{$l->links()}} --}}
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
