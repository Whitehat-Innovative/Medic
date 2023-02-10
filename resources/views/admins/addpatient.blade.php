<x-app-layout>
    <x-slot name='slot'>
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-12">
                        <h2>New Donation Account
                            <small>Welcome to Zolive</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Zolive</a>
                            </li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Donation</a></li>
                            <li class="breadcrumb-item active">New Donation Account</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="{{route('make.patient')}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body">

                                    <div class="form-group">
                                        <label  class="form-control" for="Patient"> Patient</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Patient name" />
                                    </div>
                                    <div class="form-group">
                                        <label  class="form-control" for="Email"> Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" />
                                    </div>
                                    <div class="form-group">
                                        <label  class="form-control" for="Illness Name"> Illness Name</label>
                                        <input type="text" class="form-control" name="illness_name" placeholder="Enter Illness Name" />
                                    </div>
                                    <div class="form-group">
                                        <label  class="form-control" for="Target Fund"> Target Fund</label>
                                        <input type="number" class="form-control" name="target_fund" placeholder="Enter Target Fund " />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="illness_description" class="form-control"  id="" placeholder="Enter Illness Description " cols="20" rows="10"> </textarea>
                                        {{-- <input type="text" class="form-control" name="content"  placeholder="Enter Blog title" /> --}}
                                    </div>


                                    <div class="form-group">
                                        <label  class="form-control" for="Age"> Age</label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age " />
                                    </div>
                                    <select name="sex"  class="mt-2">
                                        <option selected disabled>Select Sex --</option>

                                       <option value="Female" >Female</option>
                                       <option value="Male" >Male</option>
                                       <option value="Nil" >Nil</option>



                                    </select>

                                    <div class="  mt-2">
                                        <input name="image" type="file"  accept="image*/"  multiple />
                                    </div>

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

    <x-slot name="script">

        <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute('href');
          console.log(urlToRedirect);
          swal({
              title: "Are you sure to cancel this product",
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
