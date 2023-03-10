<x-app-layout>

    <x-slot name='slot'>

        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Patients Testimonials
                            <small>Welcome to ZOLIVE</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="zmdi zmdi-home"></i>
                                    ZOLIVE</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Patients Testimonials</a></li>
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
                                            href="#">Add Testimonials</a></li>
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
                                                                                @foreach ($tes as $tes)
                                                                                <tr>
                                                                                    <td>

                                                                                    </td>

                                                                                   <td>
                                                                                       <span class="phone"><i
                                                                                               class=""></i>{{$tes->name}}</span>
                                                                                   </td>

                                                                                   <td>
                                                                                    <span class="phone"><i
                                                                                            class=""></i>{{$tes->message}}</span>
                                                                                </td>

                                                                                    {{-- <td>
                                                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                                                </td> --}}
                                                                                    <td class="flex">
                                                                                        <a onclick="confirmation(event)"
                                                                                        class="btn btn-icon btn-neutral btn-icon-mini "
                                                                                        href="{{route('approve.testimonial', $tes->id)}}"><i
                                                                                            class="zmdi zmdi-eye mt-1"></i></a>

                                                                                        <a onclick="confirmation(event)"
                                                                                            class="btn btn-icon btn-neutral btn-icon-mini "
                                                                                            href="{{route('delete.testimonial', $tes->id)}}"><i
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
