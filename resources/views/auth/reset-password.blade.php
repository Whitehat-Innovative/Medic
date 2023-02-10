


<x-guest-layout>

    <!-- End Navbar -->
    <x-slot name="slot">



        <div class="page-header">
            <div class="page-header-image" style="background-image:url(/adminassets/images/login.jpg)"></div>
            <div class="container">
                <div class="col-md-12 content-center">
                    <div class="card-plain">
                        <form class="form" method="POST" action="{{route('password.update')}}">
                            @csrf
                            <div class="header">
                                <div class="logo-container">
                                    <img src="/assets/logo/demo2.png" alt="">
                                </div>
                                <h5>Reset Password</h5>
                                <span>Insert a new password easily</span>
                            </div>
                            <div class="header">


                                <span>
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                </span>
                            </div>
                            <div class="content">
                                <div class="input-group">
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                </div>
                                <!-- Email Address -->
                                <div>
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email', $request->email)" required autofocus />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required />
                                </div>

                                <div class="checkbox">
                                    <input id="terms" type="checkbox">
                                    <label for="terms">
                                        I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                                    </label>
                                </div>

                                <div class="btn btn-primary btn-round btn-block  waves-effect waves-light">
                                    <x-button>
                                        {{ __('Reset Password') }}
                                    </x-button>
                                    <h5><a class="link" href="{{route('login')}}">You already have a membership?</a></h5>
                                    <h5><a class="link" href="{{route('register')}}">You dont have membership?</a></h5>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                            <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                            <li><a href="javascript:void(0);">FAQ</a></li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())

                        </script>,
                        <span>Designed by <a href="http://thememakker.com/" target="_blank">Whitehat
                                Innovatives</a></span>
                    </div>
                </div>
            </footer>
        </div>


    </x-slot>


</x-guest-layout>
