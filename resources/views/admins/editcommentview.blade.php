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
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Comment Edit</a></li>
                            <li class="breadcrumb-item active">Edit Comment/Approve </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="{{route('comment.edit.approve', $comment)}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body">

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{$comment->name}}" placeholder="Enter author name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" value="{{$comment->email}}" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment" class="form-control"  id="" placeholder="Enter Comment Content " value="{{$comment->comment}}" cols="20" rows="10">{{$comment->comment}} </textarea>
                                        {{-- <input type="text" class="form-control" name="content"  placeholder="Enter Blog title" /> --}}
                                    </div>



                                    <select name="blog_id" class="mt-2">

                                        <option selected disabled>Select Blog linked to Comment --</option>
                                       <option value="{{$comment->blog_id}}" >{{$comment->blog_id}}</option>

                                    </select>
                                    <select name="status" class="mt-2">

                                        {{-- <option selected disabled>Approve Post --</option> --}}
                                       <option selected disabled value="{{$comment->status}}" >{{$comment->status}}</option>
                                       <option value="Approved" >Approved</option>
                                       <option value="Disapproved" >Disapproved</option>
                                       <option value="Pending" >Pending</option>

                                    </select>



                                    <button type="submit"
                                    class="btn btn-primary btn-round waves-effect m-t-20">Approve Comment</button>

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
