<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>New Post
                            <small>Welcome to Oreo</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a>
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

                            <label for="image" class="header mt-2 mb-2">ENTER NEW CATEGORIES AND TAGS  </label>
                            <form action="{{route('cat.tag.add')}}"
                                method="POST" >
                                @csrf
                                <div class="body">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="category"  placeholder="Enter New Category" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tag"  placeholder="Enter New Tag" />
                                    </div>

                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Post</button>




                                </div>
                                <label for="image" class="header mt-2 mb-2"> ALL CATEGORIES AND TAGS ALREADY IN THE SYSTEM </label>

                                <select name=""  class="mt-2">
                                    <option selected disabled>All Category Available--</option>
                                    @foreach ($ct as $cat)
                                    <option disabled>{{$cat->category}}</option>
                                    @endforeach

                                </select>


                                <select name="" class=" mt-2 ">
                                    <option selected disabled>All Tags Available --</option>
                                    @foreach ($ct as $t)
                                    <option disabled>{{$t->tag}}</option>
                                    @endforeach
                                </select>
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
