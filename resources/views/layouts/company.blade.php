<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="{{ (session('localeDir', 'ltr'))}}" dir="{{ (session('localeDir', 'ltr'))}}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{__($seo->seo_title) }}</title>
        <meta name="Description" content="{!! $seo->seo_description !!}">
        <meta name="Keywords" content="{!! $seo->seo_keywords !!}">
        {!! $seo->seo_other !!}
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
  
        <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">

    <style>
        ul#footer li a {
            color: black !important;
            font-weight: 500;
        }
        ul#footer li{
            list-style: none !important;
        }
    </style>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #292828; !important">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <div class="sidebar-brand-icon mr-2">
                        <img src="{{asset('img/logos/f1.png')}}" alt="" width="auto" height="28">
                    </div>
                    <div class="sidebar-brand-text" style="font-size: 0.95rem !important">
                        WF<span style="color: #3693fe !important">security</span>
                    </div>
                </a>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Jobs
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('post.job') }}">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Post Job</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posted.jobs') }}">
                        <i class="fas fa-fw fa-heart"></i>
                        <span>All Jobs</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs.development.status') }}">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Development Status</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('companychats.messages')}}">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>{{__('Chat Messages')}}(<span id="my_msgcan_no"></span>)</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('company.followers')}}"> <!--/teste/payment-management-->
                        <i class="fab fa-paypal"></i>
                        <span>Company Followers</span>
                    </a>
                </li>
                

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle">
                        <i class="fas fa-chevron-left text-light"></i>
                    </button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="{{asset('/')}}" role="button">Home</a>
                            </li>
                        </ul>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link bg-wf text-white font-weight-bold" href="{{ route('post.job') }}" role="button">Post a Job</a>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">0</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-3 d-none d-lg-inline text-dark font-weight-bold">Lorem Ipsum</span>
                                    <img class="img-profile rounded-circle" src="https://via.placeholder.com/150x150">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/teste/my-profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{__('Logout')}}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        @yield('title-page')

                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <div class="py-4 border-top p-4"> 
                    <div class="container-fluid">
                        <div class="row"> 
                
                            <!--Quick Links-->
                            <div class="col-md-3 col-sm-6 pr-4">
                                <h5 class="pl-0 pr-0 pb-3">Quick Links</h5>
                                <!--Quick Links menu Start-->
                                <ul class="p-0" id="footer">
                                    <li><a href="{{ route('index') }}">{{__('Home')}}</a></li>
                                    <li><a href="{{ route('contact.us') }}">{{__('Contact Us')}}</a></li>
                                    <li class="postad"><a href="{{ route('post.job') }}">{{__('Post a Job')}}</a></li>
                                    <!-- <li><a href="{{ route('faq') }}">{{__('FAQs')}}</a></li> -->
                                    @foreach($show_in_footer_menu as $footer_menu)
                                    @php
                                    $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);
                                    @endphp
                                    
                                    <li class="{{ Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : '' }}"><a
                                            href="{{ route('cms', $footer_menu->page_slug) }}">{{ $cmsContent->page_title   or ''}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--Quick Links menu end-->
                
                            <div class="col-md-3 col-sm-6 pr-4">
                                <h5 class="pl-0 pr-0 pb-3">Jobs By Functional Area</h5>
                                <!--Quick Links menu Start-->
                                <ul class="p-0" id="footer">
                                    @php
                                    $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(5);
                                    @endphp
                                    @foreach($functionalAreas as $functionalArea)
                                    <li><a href="{{ route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id]) }}">{{$functionalArea->functional_area}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                
                            <!--Jobs By Industry-->
                            <div class="col-md-3 col-sm-6 pr-4">
                                <h5 class="pl-0 pr-0 pb-3">Jobs By Industry</h5>
                                <!--Industry menu Start-->
                                <ul class="p-0" id="footer">
                                    @php
                                    $industries = App\Industry::getUsingIndustries(5);
                                    @endphp
                                    @foreach($industries as $industry)
                                    <li><a href="{{ route('job.list', ['industry_id[]'=>$industry->industry_id]) }}">{{$industry->industry}}</a></li>
                                    @endforeach
                                </ul>
                                <!--Industry menu End-->
                                <div class="clear"></div>
                            </div>
                
                            <!--About Us-->
                            <div class="col-md-3 col-sm-12">
                                <h5 class="pl-0 pr-0 pb-3">Contact Us</h5>
                                <p class="font-weight-bold text-dark"><i class="fa fa-map mr-2"></i>{{ $siteSetting->site_street_address }}</p>
                                <div class="font-weight-bold">
                                    <a href="mailto:{{ $siteSetting->mail_to_address }}" class="text-dark font-weight-bold"><i class="fa fa-envelope mr-2"></i>{{ $siteSetting->mail_to_address }}</a>
                                </div>
                                <div class="font-weight-bold">
                                    <a href="tel:{{ $siteSetting->site_phone_primary }}" class="text-dark font-weight-bold"><i class="fa fa-phone mr-2"></i>{{ $siteSetting->site_phone_primary }}7</a>
                                </div>
                                <!-- Social Icons -->
                                <div class="py-3">
                                    <a href="{{ $siteSetting->facebook_address }}" target="_blank"><i class="fab fa-2x text-dark m-1 fa-facebook-square" aria-hidden="true"></i></a>
                                    <a href="{{ $siteSetting->google_plus_address }}" target="_blank"><i class="fab fa-2x text-dark m-1 fa-google-plus-square" aria-hidden="true"></i></a>
                                    <a href="{{ $siteSetting->twitter_address }}" target="_blank"><i class="fab fa-2x text-dark m-1 fa-twitter-square" aria-hidden="true"></i></a>
                                    <a href="{{ $siteSetting->instagram_address }}" target="_blank"><i class="fab fa-2x text-dark m-1 fa-instagram" aria-hidden="true"></i></a>
                                    <a href="{{ $siteSetting->linkedin_address }}" target="_blank"><i class="fab fa-2x text-dark m-1 fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="{{ $siteSetting->youtube_address }}" target="_blank"><i class="fab fa-2x text-dark m-1 fa-youtube-square" aria-hidden="true"></i></a>
                                </div>
                                <!-- Social Icons end --> 
                
                            </div>
                            <!--About us End--> 
                
                        </div>
                    </div>
                    
                </div>

                <!-- Footer-->
                <footer class="footer bg-light-custom py-4 border-top">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-8 text-lg-left">{{__('Copyright')}} &copy; {{date('Y')}} {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}.
                            {{__('Design by')}}: <a class="text-dark text-bold" href="{{url('/')}}http://atenaagencia.com/"
                                target="_blank">Atena Agência - Full Service</a>
                            </div>
                            <div class="col-lg-4 text-lg-right">
                                <a class="mr-3 text-dark" href="#!">Privacy Policy</a>
                                <a href="cms/terms-of-use" class="text-dark">Terms of Use</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
                
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <script src="{{asset('js/sb-admin-2.js')}}"></script>

        <!-- Contact form JS-->
        <script src="{{asset('mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/custom-scripts.js')}}"></script>

    </body>
</html>