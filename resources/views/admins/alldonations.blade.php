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
                                            href="#Doctors">Doctors</a></li>

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
                                        <div class="checkbox inlineblock delete_all">
                                            <input id="deleteall" type="checkbox">
                                            <label for="deleteall">
                                                All
                                            </label>
                                        </div>
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
                                                        <th>Anonimous Donor Name</th>
                                                        <th>Patient</th>
                                                        <th>Email</th>
                                                        <th>Target fund</th>
                                                        {{-- <th>Current Fund</th> --}}
                                                        <th>Status</th>
                                                        <th>Ref</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($don as $donation)


                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <input id="adelete_2" type="checkbox">
                                                                <label for="adelete_2">&nbsp;</label>
                                                            </div>
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

                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi  m-r-10"></i>{{$donation->patient->name}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-account-box-phone m-r-10"></i>{{$donation->email}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-pin  m-r-10"></i>{{$donation->patient->target_fund}}</span>
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





                                                                    <form  class="btn btn-icon btn-neutral btn-icon-mini" action="{{route('delete.donation', $donation)}} " method="POST">


                                                                        @csrf

                                                                        <button class="btn btn-icon btn-neutral btn-icon-mini" type="submit" data-toggle="modal" data-target="#defaultModal"><i
                                                                            class="zmdi zmdi-delete"></i></button>



                                                                    </form>
                                                                    {{-- <button class="btn btn-icon btn-neutral btn-icon-mini" >
                                                                        <a href="{{route('edit.dview', $donation)}}"><i class="zmdi zmdi-edit" ></i></a></button> --}}


                                                        </td>
                                                    </tr>



                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-default waves-effect m-r-20"
                                        data-toggle="modal" data-target="#defaultModal">MODAL - DEFAULT SIZE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <ul class="pagination pagination-primary m-b-0">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="zmdi zmdi-arrow-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="zmdi zmdi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



        </section>


    </x-slot>
</x-app-layout>
