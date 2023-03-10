<x-app-layout>

    <x-slot name='slot'>

        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Surgical Outreaches and Our Partners
                            <small>Welcome to ZOLIVE</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="zmdi zmdi-home"></i>
                                    ZOLIVE</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Surgical Outreaches and our Partners</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="body">
                                <ul class="nav nav-tabs padding-0">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="{{route('outreaches')}}">Add Surgical Outreach</a></li>
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
                                                                                    <th>Image</th>
                                                                                    <th>Description</th>
                                                                                    <th>Start Date</th>
                                                                                    <th>End Date</th>

                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($sug as $sug)
                                                                                <tr>

                                                                                    <td>
                                                                                         <img src="/storage/surgical/{{$sug->image}}"
                                                                                        class="rounded-circle avatar" alt="">
                                                                                        <p class="c_name"></p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <span class="phone"><i
                                                                                                class=""></i>{{$sug->description}}</span>
                                                                                    </td>


                                                                                     <td>
                                                                                    <address><i class=""></i>{{$sug->start_date}}</address>
                                                                                </td>
                                                                                <td>
                                                                                    <address><i class="n"></i>{{$sug->end_date}}</address>
                                                                                </td>
                                                                                     <td class="flex">

                                                                                        <a onclick="confirmation(event)"
                                                                                            class="btn btn-icon btn-neutral btn-icon-mini "
                                                                                            href="{{route('delete.surgical', $sug->id)}}"><i
                                                                                                class="zmdi zmdi-delete mt-1"></i></a>

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
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="body">
                                <ul class="nav nav-tabs padding-0">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="{{route('addpartners')}}">Add Partners</a></li>
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
                                                                                    <th>Logo</th>
                                                                                    <th>Name</th>

                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($pat as $pat)
                                                                                <tr>
                                                                                    <td>

                                                                                    </td>
                                                                                    <td>
                                                                                        <img src="/storage/partner/{{$pat->logo}}"
                                                                                       class="rounded-circle avatar img-fluid" style="height:
                                                                                       70px; width: auto" alt="logo">
                                                                                       <p class="c_name"></p>
                                                                                   </td>
                                                                                   <td>
                                                                                       <span class="phone"><i
                                                                                               class=""></i>{{$pat->name_of_firm}}</span>
                                                                                   </td>


                                                                                    {{-- <td>
                                                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                                                </td> --}}
                                                                                    <td class="flex">

                                                                                        <a onclick="confirmation(event)"
                                                                                            class="btn btn-icon btn-neutral btn-icon-mini "
                                                                                            href="{{route('delete.partner', $pat->id)}}"><i
                                                                                                class="zmdi zmdi-delete mt-1"></i></a>

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
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

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
                        title: "Are you sure to Delete this Research",
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
