<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>New Post
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                            <li class="breadcrumb-item active">New Post</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="{{route('edit.patient', $patient)}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{$patient->name}}" placeholder="Enter Patient Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="{{$patient->email}}" placeholder="Enter Patient Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="illness_name" value="{{$patient->illness_name}}" placeholder="Enter Patient Illness Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="age" value="{{$patient->age}}" placeholder="Enter Patient Age" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="illness_description" class="form-control"  id="" placeholder="Enter Illness description " value="{{$patient->illness_description}}" cols="20" rows="10">{{$patient->illness_description}} </textarea>
                                        {{-- <input type="text" class="form-control" name="content"  placeholder="Enter Blog title" /> --}}
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control" name="target_fund" value="{{$patient->target_fund}}"  placeholder="Enter Target fund" />
                                    </div>
                                    <select name="sex" class="mt-2">

                                        <option selected disabled>Select Sex --</option>
                                       <option value="{{$patient->sex}}" >{{$patient->sex}}</option>

                                    </select>

                                    <div class="  mt-2">

                                         <input name="image" type="file" value="{{$patient->image}}"  accept="image*/"  multiple />

                                    </div>
                                    <div class="image mt-2"><a href="profile.html"><img src="/Patient-image/{{$patient->image}}"
                                        alt="User"></a>

                                    <span>Old image</span></div>


                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Save</button>

                                </div>
                            </form>
                        </div>
                        {{-- <div class="card">
                            <div class="body">

                                <button type="button"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Post</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

    </x-slot>
</x-app-layout>
