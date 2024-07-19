<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('admintitle') | Vana Resort</title>
    {{-- @php
     $footer = \App\Models\FooterDetail::find(1);
    @endphp --}}
    <!-- Favicon -->
    @php
    $footer = \App\Models\ContactDetail::find(1);
    @endphp
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('web_assets/dynamics/slider/'.$footer->favicon)}}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('dash_assets/style.css')}}">

</head>

<style>
    .mtop1{
        margin-top: 6px;
    }
    .mtop{
        margin-top: 0px;
    }
   @media only screen and (max-width: 768px) {
 .mtop{
        margin-top: 6px;
    }
}
</style>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="{{url('admin/dashboard')}}">
                    <img class="desktop-logo" src="{{asset('web_assets/dynamics/slider/'.$footer->logo)}}" alt="Desktop Logo" style="height:55px;"> 
                    <img class="small-logo" src="{{asset('web_assets/dynamics/slider/'.$footer->logo)}}" alt="Desktop Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="{{ request()->routeIs('dashboard.dashboard') ? 'active' : '' }} ">
                                <a href="{{url('admin/dashboard')}}"><i class="zmdi zmdi-view-web"></i> 
                                    <span>Dashboard</span></a></li>
                            <li class=" {{ request()->routeIs('admin.*') ? 'active' : '' }}">
                                <a href="{{route('admin.home-banner-details')}}"><i class="zmdi zmdi-home"></i>
                                    <span>Home Banner</span> 
                                    </a>
                             </li>
                             <li class=" {{ request()->routeIs('about.*') ? 'active' : '' }}">
                                <a href="{{route('about.about-details')}}"><i class="zmdi zmdi-view-list"></i> <span>About Page Details</span>
                                </a>
                                
                            </li>
                            <li class=" {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                                <a href="{{route('gallery.gallery-details')}}"><i class="zmdi zmdi-cake"></i> <span>Gallery Details</span> 
                                   </a>
                                
                            </li>
                           <li class=" {{ request()->routeIs('contact.*') ? 'active' : '' }}">
                                <a href="{{route('contact.contact-details')}}"><i class="zmdi zmdi-code"></i> <span>Footer & Contact Details</span>
                                   </a>
                                
                            </li>
                           <li class=" {{ request()->routeIs('room.*') ? 'active' : '' }}">
                                <a href="{{route('room.rooms-details')}}"><i class="zmdi zmdi-print"></i> <span>Rooms Details</span> 
                                    </a>
                            </li>
                            <li class="{{ request()->routeIs('password.*') ? 'active' : '' }}">
                            <a href="{{route('password.change-password')}}"><i class="zmdi zmdi-shield-check"></i><span>Change password</span></a>
                            </li>
                            <li class="{{ request()->routeIs('site-setting') ? 'active' : '' }}">
                                <a href="{{route('site-setting')}}"><i class="zmdi zmdi-assignment"></i><span>Site Setting</span></a>
                             </li>
                             <li > 
                                <a href="{{route('enquiry-details')}}"><i class="zmdi zmdi-account-calendar"></i><span>Enquiry details</span> </a>
                             </li> 
                             <li > 
                                <a href="{{route('admin.logout')}}"><i class="zmdi zmdi-lock-outline"></i><span>Logout</span> </a>
                             </li> 
                         </ul>
                    </nav>
                </div>
            </div>
        </div>

        
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="{{url('admin/dashboard')}}"><img src="{{asset('web_assets/dynamics/slider/'.$footer->logo)}}" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class="fa fa-reorder"></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <!-- Left Side Nav -->
<!--                        {{-- <li class="hide-phone app-search">
                            <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0">
                            <i class="fa fa-search"></i></button></form>
                        </li> --}}-->

                       

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('dash_assets/img/member-img/4.png')}}" alt="admin image"></button>
                            <div class="dropdown-menu header-profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    
                                    <a href="{{route('password.change-password')}}" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon" aria-hidden="true"></i> Change Password</a>
                                    <a href="{{url('admin/logout')}}" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i>Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>