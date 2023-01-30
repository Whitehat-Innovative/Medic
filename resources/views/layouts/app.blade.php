<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/hospital/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 16:08:50 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Oreo Hospital :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">


<!-- Favicon-->
<link rel="stylesheet" href="/adminassets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/adminassets/plugins/dropzone/dropzone.css">
<link rel="stylesheet" href="/adminassets/plugins/bootstrap-select/css/bootstrap-select.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="/adminassets/css/main.css">
<link rel="stylesheet" href="/adminassets/css/blog.css">
<link rel="stylesheet" href="/adminassets/css/color_skins.css">

 <!-- Favicon-->
<link rel="stylesheet" href="/adminassets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/adminassets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="/adminassets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="/adminassets/css/main.css">
<link rel="stylesheet" href="/adminassets/css/color_skins.css">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="/adminassets/logo/demo2.png" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

 <!-- Overlay For Sidebars -->
 <div class="overlay"></div>
 <!-- Top Bar -->
 <nav class="navbar p-l-5 p-r-5">
     <ul class="nav navbar-nav navbar-left">
         <li>
             <div class="navbar-header">
                 <a href="javascript:void(0);" class="bars"></a>
                 <a class="navbar-brand" href="index.html"><img
                         src="/adminassets/logo/demo2.png"
                         width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
             </div>
         </li>

         <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
         <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                 role="button"><i class="zmdi zmdi-notifications"></i>
                 <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
             </a>
             <ul class="dropdown-menu pullDown">
                 <li class="body">
                     <ul class="menu list-unstyled">

                         <li>
                             <a href="javascript:void(0);">
                                 <div class="media">
                                     <img class="media-object" src="/adminassets/images/xs/avatar6.jpg" alt="">
                                     <div class="media-body">
                                         <span class="name">Grayson <span class="time">1hr ago</span></span>
                                         <span class="message">There are many variations of passages</span>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
             </ul>
         </li>
         <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                 role="button"><i class="zmdi zmdi-flag"></i>
                 <div class="notify">
                     <span class="heartbit"></span>
                     <span class="point"></span>
                 </div>
             </a>
             <ul class="dropdown-menu pullDown">
                 <li class="header">Project</li>
                 <li class="body">
                     <ul class="menu tasks list-unstyled">
                         <li>
                             <a href="javascript:void(0);">
                                 <div class="progress-container progress-primary">
                                     <span class="progress-badge">Neurology</span>
                                     <div class="progress">
                                         <div class="progress-bar" role="progressbar" aria-valuenow="86"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                             <span class="progress-value">86%</span>
                                         </div>
                                     </div>
                                     <ul class="list-unstyled team-info">
                                         <li class="m-r-15"><small class="text-muted">Team</small></li>
                                         <li>
                                             <img src="/adminassets/images/xs/avatar2.jpg" alt="Avatar">
                                         </li>
                                         <li>
                                             <img src="/adminassets/images/xs/avatar3.jpg" alt="Avatar">
                                         </li>
                                         <li>
                                             <img src="/adminassets/images/xs/avatar4.jpg" alt="Avatar">
                                         </li>
                                     </ul>
                                 </div>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="footer"><a href="javascript:void(0);">View All</a></li>
             </ul>
         </li>

         {{-- <li class="d-none d-md-inline-block">
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search...">
                 <span class="input-group-addon">
                     <i class="zmdi zmdi-search"></i>
                 </span>
             </div>
         </li> --}}

         <li class="float-right">

             <form method="POST" action="{{ route('logout') }}">
             @csrf

             <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                class="zmdi zmdi-settings zmdi-hc-spin"></i></a>

             <button class="btn btn-alert" >
                 <a href="#" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
             </button>



         </form>


         </li>
     </ul>
 </nav>
 <!-- Left Sidebar -->
 <aside id="leftsidebar" class="sidebar">
     <ul class="nav nav-tabs">
         <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i
                     class="zmdi zmdi-home m-r-5"></i>ZOLIVE</a></li>
         {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Doctor</a></li> --}}
     </ul>
     <div class="tab-content">
         <div class="tab-pane stretchRight active" id="dashboard">
             <div class="menu">
                 <ul class="list">
                     <li>
                         {{-- <div class="user-info">
                             <div class="image"><a href="profile.html"><img src="/User-image/{{$u->image}}"
                                         alt="User"></a></div>
                             <div class="detail">
                                 <h4>Dr. {{$u->name}}</h4>
                                 <small>Neurologist</small>
                             </div>
                         </div> --}}
                     </li>
                     <li class="header"></li>
                     <li class="active open"><a href="index.html"><i
                                 class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                     {{-- <li><a href="book-appointment.html"><i
                                 class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a></li> --}}



                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                    class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                            <ul class="ml-menu">

                                {{-- <li><a href="{{route('blog')}}">New Post</a></li> --}}
                                <li><a href="blog-post.html">Edit Blog post</a></li>
                                {{-- <li><a href="{{route('cat.tag.view')}}">Add Category/Tags</a></li> --}}
                                <li><a href="blog-list.html">Blog list</a></li>

                            </ul>
                        </li>

                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                    class="zmdi zmdi-copy"></i><span>Research</span></a>
                            <ul class="ml-menu">

                                {{-- <li><a href="{{route('research')}}">New Research</a></li> --}}
                                {{-- <li><a href="blog-post.html">Edit Research</a></li> --}}
                                {{-- <li><a href="{{route('cat.tag.view')}}">Add Category/Tags</a></li> --}}
                                {{-- <li><a href="{{route('research.list')}}">Research List</a></li> --}}

                            </ul>
                        </li>

                         <li>

                            {{-- <a href="{{route('view.user')}}"><i class="zmdi zmdi-account-add"></i><span>All Users</span> </a> --}}

                        </li>

                        {{-- <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-account-add"></i><span>Users</span> </a>
                    <ul class="ml-menu">
                        <li><a href="doctors.html">All Users</a></li>
                        <li><a href="add-doctor.html">Add Doctor</a></li>
                        <li><a href="profile.html">Doctor Profile</a></li>
                        <li><a href="events.html">Doctor Schedule</a></li>
                    </ul>
                </li> --}}
                     {{-- <li><a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                         <ul class="ml-menu">
                             <li><a href="doctors.html">All Doctors</a></li>
                             <li><a href="add-doctor.html">Add Doctor</a></li>
                             <li><a href="profile.html">Doctor Profile</a></li>
                             <li><a href="events.html">Doctor Schedule</a></li>
                         </ul>
                     </li>
                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                         <ul class="ml-menu">
                             <li><a href="patients.html">All Patients</a></li>
                             <li><a href="add-patient.html">Add Patient</a></li>
                             <li><a href="patient-profile.html">Patient Profile</a></li>
                             <li><a href="patient-invoice.html">Invoice</a></li>
                         </ul>
                     </li>
                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                         <ul class="ml-menu">
                             <li><a href="payments.html">Payments</a></li>
                             <li><a href="add-payments.html">Add Payment</a></li>
                             <li><a href="invoice.html">Invoice</a></li>
                         </ul>
                     </li>
                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-label-alt"></i><span>Departments</span> </a>
                         <ul class="ml-menu">
                             <li><a href="add-departments.html">Add</a></li>
                             <li><a href="all-Departments.html">All Departments</a></li>
                             <li><a href="javascript:void(0);">Cardiology</a></li>
                             <li><a href="javascript:void(0);">Pulmonology</a></li>
                             <li><a href="javascript:void(0);">Gynecology</a></li>
                             <li><a href="javascript:void(0);">Neurology</a></li>
                             <li><a href="javascript:void(0);">Urology</a></li>
                             <li><a href="javascript:void(0);">Gastrology</a></li>
                             <li><a href="javascript:void(0);">Pediatrician</a></li>
                             <li><a href="javascript:void(0);">Laboratory</a></li>
                         </ul>
                     </li>
                     <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                         <ul class="ml-menu">
                             <li><a href="sign-in.html">Sign In</a> </li>
                             <li><a href="sign-up.html">Sign Up</a> </li>
                             <li><a href="forgot-password.html">Forgot Password</a> </li>
                             <li><a href="404.html">Page 404</a> </li>
                             <li><a href="500.html">Page 500</a> </li>
                             <li><a href="page-offline.html">Page Offline</a> </li>
                             <li><a href="locked.html">Locked Screen</a> </li>
                         </ul>
                     </li>
                     <li class="header">EXTRA COMPONENTS</li>
                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                         <ul class="ml-menu">
                             <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                             <li><a href="blog-post.html">New Post</a></li>
                             <li><a href="blog-list.html">Blog List</a></li>
                             <li><a href="blog-grid.html">Blog Grid</a></li>
                             <li><a href="blog-details.html">Blog Single</a></li>
                         </ul>
                     </li>
                     <li><a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-folder"></i><span>File Manager</span> </a>
                         <ul class="ml-menu">
                             <li><a href="file-dashboard.html">All File</a></li>
                             <li><a href="file-documents.html">Documents</a></li>
                             <li><a href="file-media.html">Media</a></li>
                             <li><a href="file-images.html">Images</a></li>
                         </ul>
                     </li>
                     <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-apps"></i><span>App</span> </a>
                         <ul class="ml-menu">
                             <li><a href="mail-inbox.html">Inbox</a></li>
                             <li><a href="chat.html">Chat</a></li>
                             <li><a href="contact.html">Contact list</a></li>
                         </ul>
                     </li>
                     <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                         <ul class="ml-menu">
                             <li><a href="widgets-app.html">Apps Widgetse</a></li>
                             <li><a href="widgets-data.html">Data Widgetse</a></li>
                         </ul>
                     </li>
                     <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                         <ul class="ml-menu">
                             <li><a href="blank.html">Blank Page</a> </li>
                             <li><a href="https://thememakker.com/templates/oreo/hospital/html/rtl/index.html">RTL
                                     Support</a></li>
                             <li><a href="image-gallery.html">Image Gallery</a> </li>
                             <li><a href="profile.html">Profile</a></li>
                             <li><a href="timeline.html">Timeline</a></li>
                             <li><a href="invoice.html">Invoices</a></li>
                             <li><a href="search-results.html">Search Results</a></li>
                         </ul>
                     </li>
                     <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                 class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                         <ul class="ml-menu">
                             <li><a href="ui_kit.html">UI KIT</a></li>
                             <li><a href="alerts.html">Alerts</a></li>
                             <li><a href="collapse.html">Collapse</a></li>
                             <li><a href="colors.html">Colors</a></li>
                             <li><a href="dialogs.html">Dialogs</a></li>
                             <li><a href="icons.html">Icons</a></li>
                             <li><a href="list-group.html">List Group</a></li>
                             <li><a href="media-object.html">Media Object</a></li>
                             <li><a href="modals.html">Modals</a></li>
                             <li><a href="notifications.html">Notifications</a></li>
                             <li><a href="progressbars.html">Progress Bars</a></li>
                             <li><a href="range-sliders.html">Range Sliders</a></li>
                             <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                             <li><a href="tabs.html">Tabs</a></li>
                             <li><a href="waves.html">Waves</a></li>
                         </ul>
                     </li>
                     <li class="header">Extra</li>
                     <li>
                         <div class="progress-container progress-primary m-t-10">
                             <span class="progress-badge">Traffic this Month</span>
                             <div class="progress">
                                 <div class="progress-bar progress-bar-warning" role="progressbar"
                                     aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 67%;">
                                     <span class="progress-value">67%</span>
                                 </div>
                             </div>
                         </div>
                         <div class="progress-container progress-info">
                             <span class="progress-badge">Server Load</span>
                             <div class="progress">
                                 <div class="progress-bar progress-bar-warning" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 86%;">
                                     <span class="progress-value">86%</span>
                                 </div>
                             </div>
                         </div>
                     </li>--}}
                 </ul>
             </div>
         </div>
         <div class="tab-pane stretchLeft" id="user">
             <div class="menu">
                 <ul class="list">
                     <li>
                         <div class="user-info m-b-20 p-b-15">
                             <div class="image"><a href="profile.html"><img src="/adminassets/images/profile_av.jpg"
                                         alt="User"></a></div>
                             <div class="detail">
                                 <h4>Dr. Charlotte</h4>
                                 <small>Neurologist</small>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                     <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                     <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                                 </div>
                                 <div class="col-4 p-r-0">
                                     <h5 class="m-b-5">18</h5>
                                     <small>Exp</small>
                                 </div>
                                 <div class="col-4">
                                     <h5 class="m-b-5">125</h5>
                                     <small>Awards</small>
                                 </div>
                                 <div class="col-4 p-l-0">
                                     <h5 class="m-b-5">148</h5>
                                     <small>Clients</small>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li>
                         <small class="text-muted">Location: </small>
                         <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                         <hr>
                         <small class="text-muted">Email address: </small>
                         <p>Charlotte@example.com</p>
                         <hr>
                         <small class="text-muted">Phone: </small>
                         <p>+ 202-555-0191</p>
                         <hr>
                         <small class="text-muted">Website: </small>
                         <p>dr.charlotte.com/ </p>
                         <hr>
                         <ul class="list-unstyled">
                             <li>
                                 <div>Colorectal Surgery</div>
                                 <div class="progress m-b-20">
                                     <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span
                                             class="sr-only">62% Complete</span> </div>
                                 </div>
                             </li>
                             <li>
                                 <div>Endocrinology</div>
                                 <div class="progress m-b-20">
                                     <div class="progress-bar l-green " role="progressbar" aria-valuenow="56"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span
                                             class="sr-only">87% Complete</span> </div>
                                 </div>
                             </li>
                             <li>
                                 <div>Dermatology</div>
                                 <div class="progress m-b-20">
                                     <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span
                                             class="sr-only">32% Complete</span> </div>
                                 </div>
                             </li>
                             <li>
                                 <div>Neurophysiology</div>
                                 <div class="progress m-b-20">
                                     <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span
                                             class="sr-only">56% Complete</span> </div>
                                 </div>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </aside>

 <!-- Chat-launcher -->
 <div class="chat-launcher"></div>
 <div class="chat-wrapper">
     <div class="card">
         <div class="header">
             <ul class="list-unstyled team-info margin-0">
                 <li class="m-r-15">
                     <h2>Dr. Team</h2>
                 </li>
                 <li>
                     <img src="/adminassets/images/xs/avatar2.jpg" alt="Avatar">
                 </li>
                 <li>
                     <img src="/adminassets/images/xs/avatar3.jpg" alt="Avatar">
                 </li>
                 <li>
                     <img src="/adminassets/images/xs/avatar4.jpg" alt="Avatar">
                 </li>
                 <li>
                     <img src="/adminassets/images/xs/avatar6.jpg" alt="Avatar">
                 </li>
                 <li>
                     <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                 </li>
             </ul>
         </div>
         <div class="body">
             <div class="chat-widget">
                 <ul class="chat-scroll-list clearfix">
                     <li class="left float-left">
                         <img src="/adminassets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                         <div class="chat-info">
                             <a class="name" href="#">Alexander</a>
                             <span class="datetime">6:12</span>
                             <span class="message">Hello, John </span>
                         </div>
                     </li>
                     <li class="right">
                         <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi,
                                 Alexander<br> How are you!</span> </div>
                     </li>
                     <li class="right">
                         <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There
                                 are many variations of passages of Lorem Ipsum available</span> </div>
                     </li>
                     <li class="left float-left"> <img src="/adminassets/images/xs/avatar2.jpg"
                             class="rounded-circle" alt="">
                         <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span
                                 class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br>
                                 What are you doing?</span> </div>
                     </li>
                     <li class="left float-left"> <img src="/adminassets/images/xs/avatar1.jpg"
                             class="rounded-circle" alt="">
                         <div class="chat-info"> <a class="name" href="#">Michael</a> <span
                                 class="datetime">6:28</span> <span class="message">I would love to join the
                                 team.</span> </div>
                     </li>
                     <li class="right">
                         <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello,
                                 <br>Michael</span> </div>
                     </li>
                 </ul>
             </div>
             <div class="input-group p-t-15">
                 <input type="text" class="form-control" placeholder="Enter text here...">
                 <span class="input-group-addon">
                     <i class="zmdi zmdi-mail-send"></i>
                 </span>
             </div>
         </div>
     </div>
 </div>


{{$slot}}


    <!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default btn-round waves-effect">delete</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>




<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Small Size -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- For Material Design Colors -->
<div class="modal fade" id="colorModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-red">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Color Modal title</h4>
            </div>
            <div class="modal-body col-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect col-white">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect col-white" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="/adminassets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="/adminassets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="/adminassets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="/adminassets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="/adminassets/bundles/knob.bundle.js"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

<script src="/adminassets/bundles/mainscripts.bundle.js"></script>
<script src="/adminassets/js/pages/index.js"></script>
{{-- <script src="/adminassets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> --}}
{{-- <script src="/adminassets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> --}}

<script src="/adminassets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<script src="/adminassets/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor -->

{{-- <script src="/adminassets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> --}}
<script src="/adminassets/js/pages/forms/editors.js"></script>

<script src="/adminassets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<script src="/adminassets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


<script>
    $(function () {
    //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm',
        clearButton: true,
        weekStart: 1
    });
});
</script>


</body>

<!-- Mirrored from thememakker.com/templates/oreo/hospital/html/light/file-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 16:13:20 GMT -->
</html>
