<x-guest-layout>
    <!-- End Navbar -->
    <x-slot name="slot">
        <div class="page-header">
            <div class="page-header-image" style="background-image:url(/adminassets/images/login.jpg)"></div>
            <div class="container">
                <div class="col-md-12 content-center">
                    <div class="card-plain">
                        <form class="form" method="POST" action="{{route('password.email')}}">
                            @csrf
                            <div class="header">
                                <div class="logo-container">
                                    <img src="/assets/logo/demo2.png" alt="">
                                </div>
                                <h5>Verify Email</h5>
                                <span>
                                    <div class="mb-4 text-sm text-gray-600">
                                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                    </div>
                                </span>

                                @if (session('status') == 'verification-link-sent')
                                <span>
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </div>
                                </span>
                                @endif

                            </div>
                            <div class="header">


                                <span>

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                </span>
                            </div>
                            <div class="content">

                                <div class="mt-4 flex items-center justify-between">
                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf

                                        <div>
                                            <button class="btn btn-primary btn-round btn-block  waves-effect waves-light"
                                    type="submit">Resend verification email</button>
                                        </div>
                                    </form>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit"
                                        class="btn btn-primary btn-round btn-block  waves-effect waves-light">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </div>

                            </div>
                            <div class="checkbox mt-4">
                                <input id="terms" type="checkbox">
                                <label for="terms">
                                    I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                                </label>
                            </div>
                            <div class="footer text-center">
                                <button class="btn btn-primary btn-round btn-block  waves-effect waves-light"
                                    type="submit">Email password reset link</button>
                                {{-- <a href="{{route('register')}}" class="btn btn-primary btn-round btn-block
                                waves-effect waves-light">SIGN UP</a> --}}

                                <h5><a class="link" href="{{route('register')}}">You dont have membership?</a></h5>
                                <h5><a class="link mt-0" href="{{route('login')}}">You already have membership?</a></h5>
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
