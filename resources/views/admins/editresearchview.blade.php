<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>Edit Research
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Research</a></li>
                            <li class="breadcrumb-item active">Edit Research</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="{{route('research.edit', $research)}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" value="{{$research->title}}" placeholder="Enter Blog title" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="content" class="form-control"  id="" placeholder="Enter Blog Content " value="{{$research->content}}" cols="20" rows="10">{{$research->content}} </textarea>
                                        {{-- <input type="text" class="form-control" name="content"  placeholder="Enter Blog title" /> --}}
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control" name="author" value="{{$research->author}}"  placeholder="Enter Author name" />
                                    </div>
                                    <select name="category" class="mt-4">

                                        <option selected disabled>Select Category --</option>
                                       <option value="{{$research->category}}" >{{$research->category}}</option>

                                    </select>

                                    <div class="  mt-4">

                                         <input name="image" type="file" value="{{$research->image}}"  accept="image*/"  multiple />

                                    </div>
                                    <div class="image mt-4"><a href="profile.html"><img src="/Research-image/{{$research->image}}"
                                        alt="User"></a>

                                    <span>Old image</span>
                                </div>


                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Edit Research</button>

                                    {{-- <a href="{{route('edit.research', $research)}}" title="read more" class="btn btn-round btn-info mt-3">Delete</a> --}}

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

    <x-slot name="script">

        <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute('href');
          console.log(urlToRedirect);
          swal({
              title: "Are you sure to EDIT this research",
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
