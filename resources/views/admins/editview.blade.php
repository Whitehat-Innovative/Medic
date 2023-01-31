

<x-app-layout>
    <x-slot name="slot">


        <section class="content">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Add Patient
                        <small class="text-muted">Welcome to Oreo</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Patient</a></li>
                            <li class="breadcrumb-item active">Add Patient</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form action="{{route('edit.user', $u)}}" method="POST" enctype="multipart/form-data" >
                            @csrf 
                            <div class="card">
                                <div class="header">

                                    <span>

                                        <p>User Details</p>

                                    </span>

                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"   value="{{$u->name}}"  placeholder=" Name" >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="code"  value="{{$u->code}}"  placeholder=" Your Role">
                                        </div>
                                    </div>
                                </div>
                                    <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"  value="{{$u->email}}"  placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                    <div class="row clearfix container">
                                        <img src="/User-image/{{$u->image}}" class="rounded-circle avatar" alt="">
                                    </div>
                                    <div class="row clearfix container">
                                        <input type="file" name="image" multiple accept="image*/" value="{{$u->image}}">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                    {{-- <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                       <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                            <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </section>


    </x-slot>
</x-app-layout>



