<x-app-layout>
    <x-slot name="slot">
        <section class="content contact">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>All Comments
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                            <li class="breadcrumb-item active">All Comments  </li>
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
                                            href="#Doctors">Comments</a></li>

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
                                            <form action="{{route('search')}}" >

                                                <input type="search" class="form-control" name="search" placeholder="Search...">
                                                <button type="submit" >
                                                    <i class="zmdi zmdi-search"></i>
                                                 </button>

                                                </form>



                                        </div>
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
                                                        <th>Blog</th>
                                                        <th>Replies</th>
                                                        <th>Status</th>


                                                        <th>Delete| Approve| Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($com as $c)


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
                                                            <p class="c_name">{{$c->name}}</p>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-account-box-phone m-r-10"></i>{{$c->email}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi "></i>{{$c->blog->title}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi "></i>{{$c->replies->count()}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="phone"><i
                                                                    class="zmdi zmdi-account-box-phone m-r-10"></i>{{$c->status}}</span>
                                                        </td>

                                                        {{-- <td>
                                                            <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                        </td> --}}
                                                        <td class="flex">

            
                                                                    <a onclick="confirmation(event)" class="btn btn-icon btn-neutral btn-icon-mini "
                                                                         href="{{route('comment.delete', $c->id)}}"><i
                                                                            class="zmdi zmdi-delete mt-1"></i></a>
                                                                    
                                                                    
                                                                    <form  class="btn btn-icon btn-neutral btn-icon-mini" action="{{route('comment.approve', $c)}} " method="POST">
                                                                        @csrf
                                                                        <button class="btn btn-icon btn-neutral btn-icon-mini" type="submit" data-toggle="modal" data-target="#defaultModal"><i
                                                                            class="zmdi zmdi-assignment-check"></i></button>
                                                                    </form>
                                                                    <button class="btn btn-icon btn-neutral btn-icon-mini" >
                                                                        <a href="{{route('comment.edit.view', $c)}}"><i class="zmdi zmdi-edit" ></i></a></button>


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
                                   {{$com->links()}}
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
              title: "Are you sure you want to Delete this comment ",
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
