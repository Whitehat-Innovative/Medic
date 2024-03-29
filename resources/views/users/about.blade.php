@extends('layouts.users.app')
@section('description')
@section('title')
@section('content')


<!--=================================  Banner start-->
<div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg'); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>About Us</h2>
                    </div>
                    <div class="pq-breadcrumb-container mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fas fa-home mr-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </div>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
            </div>
        </div>
    </div>
</div>
<!--================================= Banner end-->
<!--=================================
               our-service start-->
<section class="service pq-bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">ABOUT US</span>
                        <h5 class="pq-section-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="pq-fancy-box pq-style-3">
                    <div class="pq-fancy-box-hoverbg"> <img src="/assets/images/services/1.jpg" class="img-fluid"
                            alt="Images"> </div>
                    <div class="pq-fancy-box-icon"> <i class=" flaticon-heartbeat"></i> </div>
                    <div class="pq-fancy-box-info left">
                        <h5 class="pq-fancy-box-title">Vision Statement</h5>
                        <p class="pq-fancybox-description">In view of the fact that majority of the beneficiaries
                            of our surgical benevolence are more of the <span class="text-bold">less priviledged,
                                low-income earners as well as rural dwellers</span>
                            ZOLIVE HOSPITAL is targeting taking the health care solutions to the populace instead of
                            them coming to locate
                            us which may negatively affect their ability to access care probably due to their
                            lack of fairs to and fro the town, accomodation, etc. <br>This we wish to achieve by; <br>
                            <span class="text-bold"> (a) developing new centers in
                                the rural areas especially around the region from where the most patients needing
                                surgical
                                services came from and<br> (b) expanding the already existing facilities to enable us
                                accomodate those who come from far needed our services but may not be
                                to go back home soon after the services and yet would not be able to provide a suitable
                                accomodation for themselves through out the period of hospitalization.</span></p>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-xl-0 mt-md-0 mt-4">
                <div class="pq-fancy-box pq-style-3">
                    <div class="pq-fancy-box-hoverbg"> <img src="/assets/images/IMG-20230130-WA0019.jpg"
                            class="img-fluid" alt="Images"> </div>
                    <div class="pq-fancy-box-icon"><i class=" flaticon-first-aid-box"></i></div>
                    <div class="pq-fancy-box-info left">
                        <h5 class="pq-fancy-box-title">Mission Statement</h5>
                        <p class="pq-fancybox-description">In as much as it is humanly and practically impossible to
                            bring an end to illnesses, ZOLIVE HOSPITAL is poised at alleviating the burdens of illnesses
                            from the society through affordable health care services. <br>
                            Surgical interventions are becoming <span class="text-bold">increasingly unaffordable to
                                many</span> especially in Nigeria and Africa at large where <span
                                class="text-bold">individuals, NOT</span> the
                            <span class="text-bold">Government</span> take care and charge of their health concerns
                            alone, yet these individuals are mostly with meager source of livelihood or at best depend
                            on borrowing
                            from multiple relatives if available, ZOLIVE HOSPITAL through her many <span
                                class="text-bold">SURGICAL OUTREACHES</span> has been offering <span
                                class="text-bold">FREE</span> surgical services to the populace and ... sometimes for
                            the more complicated
                            surgical procedures and yet, with the standard best practices maintained. <br>
                            These outreaches have been part of the hospital's routine for the past 3years and thousands
                            of lives have been saved.</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 mt-4 mt-xl-0">
                <div class="pq-fancy-box pq-style-3">
                    <div class="pq-fancy-box-hoverbg"> <img src="/assets/images/IMG-20230130-WA0018.jpg"
                            class="img-fluid" alt="Images"> </div>
                    <div class="pq-fancy-box-icon"> <i class="flaticon-healthcare"></i> </div>
                    <div class="pq-fancy-box-info left">
                        <h5 class="pq-fancy-box-title">Codes of Ethics</h5>
                        <p class="pq-fancybox-description">As with the medical practicioners, below are a few of our
                            ethical codes <br>
                            (1) We are dedicated to providing competent medical care with compassion and respect for
                            human right and dignity. <br>
                            (2)We uphold the standards of professionalism, with honesty in all professional interactions
                            devoid of any form of fraud or deception <br>
                            (3) We duly respect the rights of patients, colleagues and other health professionals. <br>
                            (4) We respect the rights of patients and safeguard their confidence and privacy within the
                            constraints of the law <br>
                            (5) We continue to study, apply and advance scientific knowledge, maintain commitment to
                            medical education, make relevant information available to patients, colleagues amd the
                            public and as well as are open to advice and constructive criticism. <br>
                            (6) We recognize a responsibility to participate in activities contributing to the
                            improvement of the health of the community and the betterment of the public health. <br>
                            (7) We while caring for the patient, regard responsibilty to the patient as paramount. <br>
                            (8) We support access to medical care for all people. <br>
                            (9) We associate freely with non-medically qualified bodies where necessary as long as it is
                            relevant for the care of the patients. <br>
                            (10) We believe and practice that a good Doctor is one who recognizes his abilities and
                            limits.</p>

                    </div>
                </div>
            </div>

        </div>
</section>
<!--=================================
                       Banner end-->
<!--=================================
                       about-us start-->
<section class="about-us">
</section>
<!--=================================
                       about-us end-->

<!--=================================
                       counter start-->
<section class=" pq-counter-60 pq-bg-primary-dark pq-py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 ">
                <div class="pq-counter pq-style-2 text-center">
                    <div class="pq-counter-contain">
                        <div class="pq-counter-info">
                            <div class="pq-counter-num-prefix">
                                <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <div class="pq-counter-num-prefix pq-prefix-top">
                                <h5 class="timer" data-to="100" data-speed="5000">100</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <p class="pq-counter-description">Saves Hearts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  mt-lg-0  mt-md-0 mt-4  ">
                <div class="pq-counter pq-style-2 text-center">
                    <div class="pq-counter-contain">
                        <div class="pq-counter-info">
                            <div class="pq-counter-num-prefix">
                                <h5 class="timer" data-to="125" data-speed="5000">125</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <div class="pq-counter-num-prefix pq-prefix-top">
                                <h5 class="timer" data-to="125" data-speed="5000">125</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <p class="pq-counter-description">Expert Doctors</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0  mt-4 ">
                <div class="pq-counter pq-style-2 text-center">
                    <div class="pq-counter-contain">
                        <div class="pq-counter-info">
                            <div class="pq-counter-num-prefix">
                                <h5 class="timer" data-to="250" data-speed="5000">250</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <div class="pq-counter-num-prefix pq-prefix-top">
                                <h5 class="timer" data-to="250" data-speed="5000">250</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <p class="pq-counter-description">saved tooth</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-4 ">
                <div class="pq-counter pq-style-2 text-center">
                    <div class="pq-counter-contain border-0">
                        <div class="pq-counter-info">
                            <div class="pq-counter-num-prefix">
                                <h5 class="timer" data-to="554" data-speed="5000">554</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <div class="pq-counter-num-prefix pq-prefix-top">
                                <h5 class="timer" data-to="554" data-speed="5000">554</h5> <span
                                    class="pq-counter-prefix">k</span>
                            </div>
                            <p class="pq-counter-description">Happy Patients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
                       counter end-->

<!--=================================
                       our-blog start-->
<section class="pq-blog  pq-pb-210">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">our
                        blog</span>
                    <h5 class="pq-section-title">See Our Latest Blog</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme" data-dots="false" data-nav="false" data-desk_num="3"
                    data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true"
                    data-loop="true" data-margin="30">
                    @foreach ($blo as $blo )


                    <div class="item" >
                        <div class="pq-blog-post pq-style-1 pq-bg-grey">
                            <div class="pq-post-media"> <img src="/storage/images/blog/1.jpg" class="img-fluid"
                                    alt="images">
                                <div class="pq-post-date">
                                    <a href="{{route('single_blog', [$blog, Str::slug($blog->title)])}}"> <span>December 5, 2021</span></a>
                                </div>
                            </div>
                            <div class="pq-blog-contain">
                                <div class="pq-post-meta">
                                    <ul>
                                        <li class="pq-post-author"><i class="fa fa-user"></i>{{$blo->author}}</li>
                                        <li class="pq-post-comment"> <a href="{{route('single_blog', [$blog, Str::slug($blog->title)])}}"><i
                                                    class="fa fa-comments"></i>
                                                0 Comments</a> </li>
                                    </ul>
                                </div>
                                <h5 class="pq-blog-title"><a href="{{route('single_blog', [$blog, Str::slug($blog->title)])}}">{{$blo->title}}</a></h5>
                                <div class="pq-blog-info">
                                    <p>{{$blog->content,0,15}}</p>
                                </div>
                                <a href="{{route('single_blog', [$blog, Str::slug($blog->title)])}}" class="pq-button pq-button-link">
                                    <div class="pq-button-block"> <span class="pq-button-text">Read More</span>
                                        <i class="ion ion-plus-round"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
                       our-blog end-->

@endsection

