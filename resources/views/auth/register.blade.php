<x-guest-layout>
    <!-- End Navbar -->
       <x-slot name="slot">
           <div class="page-header">
               <div class="page-header-image" style="background-image:url(../assets/images/logo.png)" ></div>
               <div class="container">
                   <div class="col-md-12 content-center">
                       <div class="card-plain">
                           <form class="form" method="POST" action="{{route('register')}}">
                               @csrf
                               <div class="header">
                                   <div class="logo-container">
                                       <img src="/assets/images/logo.png" alt="">
                                   </div>
                                   <h5>Sign Up</h5>
                                   <span>Register a new membership</span>
                               </div>
                               <div class="header">


                                   <span>
                                        <!-- Validation Errors -->
                                       <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                   </span>
                               </div>
                               <div class="content">
                                   <div class="input-group">
                                       <input type="text" class="form-control"  required name="name"  placeholder="Enter User Name">
                                       <span class="input-group-addon">
                                           <i class="zmdi zmdi-account-circle"></i>
                                       </span>
                                   </div>
                                   <div class="input-group">
                                       <input type="text" class="form-control"  required name="email" placeholder="Enter Email">
                                       <span class="input-group-addon">
                                           <i class="zmdi zmdi-email"></i>
                                       </span>
                                   </div>
                                   <div class="input-group">
                                       <input type="password" placeholder="Password"  required name="password" class="form-control" />
                                       <span class="input-group-addon">
                                           <i class="zmdi zmdi-lock"></i>
                                       </span>
                                   </div>
                                   <div class="input-group">
                                       <input type="password" placeholder="Confirm Password"  required name="password_confirmation" class="form-control" />
                                       <span class="input-group-addon">
                                           <i class="zmdi zmdi-lock"></i>
                                       </span>
                                   </div>
                               </div>
                               <div class="checkbox">
                                       <input id="terms" type="checkbox">
                                       <label for="terms">
                                               I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                                       </label>
                                   </div>
                               <div class="footer text-center">
                                   <button class="btn btn-round btn-block  waves-effect waves-light" type="submit"> Sign Up</button>
                                   {{-- <a href="{{route('register')}}" class="btn btn-primary btn-round btn-block  waves-effect waves-light">SIGN UP</a> --}}
                                   <h5><a class="link" href="{{route('login')}}">You already have a membership?</a></h5>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
               <footer class="footer">
                   <div class="container">
                       <nav>
                           <ul>
                               <li><a href="{{route('contact')}}" target="_blank">Contact Us</a></li>
                               <li><a href="{{route('about')}}" target="_blank">About Us</a></li>
                               {{-- <li><a href="javascript:void(0);">FAQ</a></li> --}}
                           </ul>
                       </nav>
                       <div class="copyright">
                           &copy;
                           <script>
                               document.write(new Date().getFullYear())
                           </script>,
                           <span>Designed by <a href="http://thememakker.com/" target="_blank">Whitehat Innovatives</a></span>
                       </div>
                   </div>
               </footer>
           </div>


       </x-slot>


   </x-guest-layout>
