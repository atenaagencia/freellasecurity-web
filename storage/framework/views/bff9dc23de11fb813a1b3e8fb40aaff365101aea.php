<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="<?php echo e((session('localeDir', 'ltr'))); ?>" dir="<?php echo e((session('localeDir', 'ltr'))); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(__($seo->seo_title)); ?></title>
        <meta name="Description" content="<?php echo $seo->seo_description; ?>">
        <meta name="Keywords" content="<?php echo $seo->seo_keywords; ?>">
        <?php echo $seo->seo_other; ?>

        <!-- Fav Icon -->
        <link rel="shortcut icon" href="<?php echo e(asset('/favicon.ico')); ?>">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet" type="text/css">
  
        <link href="<?php echo e(asset('css/sb-admin-2.css')); ?>" rel="stylesheet" type="text/css">

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
                        <img src="<?php echo e(asset('img/logos/f1.png')); ?>" alt="" width="auto" height="28">
                    </div>
                    <div class="sidebar-brand-text" style="font-size: 0.95rem !important">
                        WF<span style="color: #3693fe !important">security</span>
                    </div>
                </a>

                <!-- Sidebar Message -->
                <div class="sidebar-card">
                    <div class="custom-control custom-switch">
                        <?php
                        $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';
                        ?>
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="is_immediate_available" <?php echo e($checked); ?> onchange="changeImmediateAvailableStatus(<?php echo e(Auth::user()->id); ?>, <?php echo e(Auth::user()->is_immediate_available); ?>);">
                        <label class="custom-control-label" for="customSwitch1"><strong>Imediate Avaliable</strong><i data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo e(__('Are you immediate available')); ?>?" data-original-title="<?php echo e(__('Are you immediate available')); ?>?" title="<?php echo e(__('Are you immediate available')); ?>?"></i></label>
                    </div>
                </div>

                <!-- <div class="switchbox">
                    <div class="txtlbl"><?php echo e(__('Immediate Available')); ?> <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo e(__('Are you immediate available')); ?>?" data-original-title="<?php echo e(__('Are you immediate available')); ?>?" title="<?php echo e(__('Are you immediate available')); ?>?"></i></div>
                    <div class="float-right">
                        <label class="switch switch-green">
                            <?php
                            $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';
                            ?>
                            <input type="checkbox" name="is_immediate_available" id="is_immediate_available" class="switch-input" <?php echo e($checked); ?> onchange="changeImmediateAvailableStatus(<?php echo e(Auth::user()->id); ?>, <?php echo e(Auth::user()->is_immediate_available); ?>);">
                            <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </div> -->

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
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
                    <a class="nav-link collapsed" href="/teste/my-job-applications">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>My Job Applications</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="/teste/my-favourite-jobs">
                        <i class="fas fa-fw fa-heart"></i>
                        <span>My Favourite Jobs</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="/teste/development-status">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Development Status</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('my.payment_management')); ?>">
                        <i class="fab fa-paypal"></i>
                        <span>Payment Management</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>My Chats</span>
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

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(asset('/jobs')); ?>" role="button">Jobs</a>
                            </li>

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(asset('/companies')); ?>" role="button">Companies</a>
                            </li>

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(asset('/contact-us')); ?>" role="button">Contact Us</a>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
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
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lorem Ipsum</span>
                                    <img class="img-profile rounded-circle" src="https://via.placeholder.com/150x150">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <?php echo $__env->yieldContent('title-page'); ?>

                        <?php echo $__env->yieldContent('content'); ?>

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
                                    <li><a href="<?php echo e(route('index')); ?>"><?php echo e(__('Home')); ?></a></li>
                                    <li><a href="<?php echo e(route('contact.us')); ?>"><?php echo e(__('Contact Us')); ?></a></li>
                                    <li class="postad"><a href="<?php echo e(route('post.job')); ?>"><?php echo e(__('Post a Job')); ?></a></li>
                                    <!-- <li><a href="<?php echo e(route('faq')); ?>"><?php echo e(__('FAQs')); ?></a></li> -->
                                    <?php $__currentLoopData = $show_in_footer_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);
                                    ?>
                                    
                                    <li class="<?php echo e(Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('cms', $footer_menu->page_slug)); ?>"><?php echo e(isset($cmsContent->page_title) ? $cmsContent->page_title : ''); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <!--Quick Links menu end-->
                
                            <div class="col-md-3 col-sm-6 pr-4">
                                <h5 class="pl-0 pr-0 pb-3">Jobs By Functional Area</h5>
                                <!--Quick Links menu Start-->
                                <ul class="p-0" id="footer">
                                    <?php
                                    $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(5);
                                    ?>
                                    <?php $__currentLoopData = $functionalAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functionalArea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])); ?>"><?php echo e($functionalArea->functional_area); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                
                            <!--Jobs By Industry-->
                            <div class="col-md-3 col-sm-6 pr-4">
                                <h5 class="pl-0 pr-0 pb-3">Jobs By Industry</h5>
                                <!--Industry menu Start-->
                                <ul class="p-0" id="footer">
                                    <?php
                                    $industries = App\Industry::getUsingIndustries(5);
                                    ?>
                                    <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('job.list', ['industry_id[]'=>$industry->industry_id])); ?>"><?php echo e($industry->industry); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <!--Industry menu End-->
                                <div class="clear"></div>
                            </div>
                
                            <!--About Us-->
                            <div class="col-md-3 col-sm-12">
                                <h5 class="pl-0 pr-0 pb-3">Contact Us</h5>
                                <p class="font-weight-bold text-dark"><i class="fa fa-map mr-2"></i><?php echo e($siteSetting->site_street_address); ?></p>
                                <div class="font-weight-bold">
                                    <a href="mailto:<?php echo e($siteSetting->mail_to_address); ?>" class="text-dark font-weight-bold"><i class="fa fa-envelope mr-2"></i><?php echo e($siteSetting->mail_to_address); ?></a>
                                </div>
                                <div class="font-weight-bold">
                                    <a href="tel:<?php echo e($siteSetting->site_phone_primary); ?>" class="text-dark font-weight-bold"><i class="fa fa-phone mr-2"></i><?php echo e($siteSetting->site_phone_primary); ?>7</a>
                                </div>
                                <!-- Social Icons -->
                                <div class="py-3">
                                    <a href="<?php echo e($siteSetting->facebook_address); ?>" target="_blank"><i class="fab fa-2x text-dark m-1 fa-facebook-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo e($siteSetting->google_plus_address); ?>" target="_blank"><i class="fab fa-2x text-dark m-1 fa-google-plus-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo e($siteSetting->twitter_address); ?>" target="_blank"><i class="fab fa-2x text-dark m-1 fa-twitter-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo e($siteSetting->instagram_address); ?>" target="_blank"><i class="fab fa-2x text-dark m-1 fa-instagram" aria-hidden="true"></i></a>
                                    <a href="<?php echo e($siteSetting->linkedin_address); ?>" target="_blank"><i class="fab fa-2x text-dark m-1 fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="<?php echo e($siteSetting->youtube_address); ?>" target="_blank"><i class="fab fa-2x text-dark m-1 fa-youtube-square" aria-hidden="true"></i></a>
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
                            <div class="col-lg-8 text-lg-left"><?php echo e(__('Copyright')); ?> &copy; <?php echo e(date('Y')); ?> <?php echo e($siteSetting->site_name); ?>. <?php echo e(__('All Rights Reserved')); ?>.
                            <?php echo e(__('Design by')); ?>: <a class="text-dark text-bold" href="<?php echo e(url('/')); ?>http://atenaagencia.com/"
                                target="_blank">Atena Agência - Full Service</a>
                            </div>
                            <div class="col-lg-4 text-lg-right">
                                <a class="mr-3 text-dark" href="#!">Privacy Policy</a>
                                <a href="cms/terms-of-use" class="text-dark">Terms of Use</a>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer> -->
                <!-- End of Footer -->

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

        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <!-- Contact form JS-->
        <script src="<?php echo e(asset('mail/jqBootstrapValidation.js')); ?>"></script>
        <script src="<?php echo e(asset('mail/contact_me.js')); ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('js/custom-scripts.js')); ?>"></script>

        <script>
            let pusher = new Pusher('a28b149bfa9cd891c76e', {
                cluster: 'ap2',
                encrypted: true
            });
            //Also remember to change channel and event name if your's are different.
            let channel = pusher.subscribe('employer');
            channel.bind('employer-notification', function (employerNotification) {
                console.log(employerNotification.content);
                console.log(employerNotification.notificationId);
                let dropdown_menu = $('#dropdown-menu');
                dropdown_menu.prepend('<li class="notification"><a href="http://vps23865.publiccloud.com.br/job' + '/' + employerNotification.jobSlug + '">' + employerNotification.content + '</li>');
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function ($) {
            $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterStates(0);
            });
            $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterCities(0);
            });
                        filterStates(0);
            });
            function filterStates(state_id)
            {
            var country_id = $('#country_id').val();
            if (country_id != ''){
            $.post("http://vps23865.publiccloud.com.br/filter-states-dropdown", {country_id: country_id, state_id: state_id, _method: 'POST', _token: 'VpALzkJ1BqMza2EquDKmV5kjmVNBOff8Agl0h8CE'})
                    .done(function (response) {
                    $('#state_dd').html(response);
                                        filterCities(0);
                    });
            }
            }
            function filterCities(city_id)
            {
            var state_id = $('#state_id').val();
            if (state_id != ''){
            $.post("http://vps23865.publiccloud.com.br/filter-cities-dropdown", {state_id: state_id, city_id: city_id, _method: 'POST', _token: 'VpALzkJ1BqMza2EquDKmV5kjmVNBOff8Agl0h8CE'})
                    .done(function (response) {
                    $('#city_dd').html(response);
                    });
            }
            }
        </script>

        <script src="http://vps23865.publiccloud.com.br/js/script.js"></script>

        <script type="text/JavaScript">
            $(document).ready(function(){
                $('#startdate').datepicker();
                $('#enddate').datepicker();
                $('#whichdate').datepicker("setDate", new Date());
    
                $(document).scrollTo('.has-error', 2000);
                });
                function showProcessingForm(btn_id){
                $("#"+btn_id).val( 'Processing .....' );
                $("#"+btn_id).attr('disabled','disabled');
            }
    
            function readmore(milestoneId) {
                 var dots = document.getElementById("dots_"+milestoneId);
                 var moreText = document.getElementById("moredescription_"+milestoneId);
                 var btnText = document.getElementById("readmorebtn_"+milestoneId);
    
                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
    
            function Submitmilestone(milestoneId) {
                $('.submitmilestoneId').val(milestoneId);
                $('#Submitmilestonemodal').modal('show');
            }
    
            function getClientJobslist(clientId) {
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                $.ajax({
                method: 'POST',
                url: 'http://vps23865.publiccloud.com.br/hired-client-jobs',
                data: {'clientId' : clientId},
                success: function(response){
                    $('#jobsofclient').html('');
                    if(response!=0){
                       var response = JSON.parse(response);
                       $('#jobsofclient').html('<option>Select Job</option>');
                       $.each(response, function(index, value){
                            $('#jobsofclient').append('<option value="'+value.id+'">'+value.title+'</option>');
                        });
                    } else {
                         $('#jobsofclient').html('<option>No Jobs found</option>');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
            }
    
            function getMilestonesList(jobId){
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                $.ajax({
                method: 'POST',
                url: 'http://vps23865.publiccloud.com.br/single-job-milestone-list',
                data: {'jobId' : jobId},
                success: function(response){
                        $('#milestonesofclient').html('');
                    if(response!=0){
                        response = JSON.parse(response);
                        var i= 0 ;
                        $.each(response, function(index, value){
                            i = parseInt(i) + parseInt(1);
                            $('#milestonesofclient').append('<option value="'+value.id+'">'+value.milestone_title+'</option>');
                        });
                    } else {
                        $('#milestonesofclient').html('<option value="">No milestones found</option>');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
              });
            }
    
            function verifywork(milestoneId) {
    
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                $.ajax({
                method: 'POST',
                url: 'http://vps23865.publiccloud.com.br/verify-milestone-work',
                data: {'milestoneId' : milestoneId},
                success: function(response){
                    var response = JSON.parse(response);
                    if(response[0].submit_message!=null){
                        var submit_message = response[0].submit_message;
                    } else {
                        var submit_message = 'No details found!!!';
                    }
    
                    var milestoneId = response[0].id;
    
                    $('.display_submit_message').text(submit_message);
                    $('.completemilestoneId').val(milestoneId);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
    
                $('#verifyworkmodal').modal('show');
            }
    
            function changeTimesheetStatus(status, timesheetId) {
                $('.timesheetid').val(timesheetId);
                $('.changedstatusvalue').val(status);
                $('#changetimesheetstatusmodal').modal('show');
            }
    
            function deleteMilestone(milestoneId) {
                $('.deleteMilestoneId').val(milestoneId);
                $('#deleteMilestoneModal').modal('show');
            }
    
            ///////////////////////////////////////////////////////////////////////////////////////////////
            //Begin : For Web based notification with pusher
            ///////////////////////////////////////////////////////////////////////////////////////////////
            var notificationsWrapper = $('.dropdown-notifications');
            var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
            var notificationsCountElem = notificationsToggle.find('i[data-count]');
            var notificationsCount = parseInt(notificationsCountElem.data('count'));
            var notifications = notificationsWrapper.find('ul.dropdown-menu');
            /*if (notificationsCount <= 0) {
                notificationsWrapper.hide();
            }*/
            var notifypusher = new Pusher('d0c7990bbda7deb1300c', {
                cluster: 'ap2',
                encrypted: false
            });
            // Subscribe to the channel we specified in our Laravel Event
            var notifyChannel = notifypusher.subscribe('job-apply-event');
            console.log("notifications testing");
            // Bind a function to a Event (the full Laravel class)
            notifyChannel.bind('App\\Events\\JobApplyEvent', function(data) {
                console.log("in"); console.log(data); console.log("#");
                var existingNotifications = notifications.html();
                var custom_link = window.location.origin+`/view-public-profile/`+data.send_user_id;
                var profile_link = '';
                if(data.send_user_profile_pic != 0 ){
                    profile_link = window.location.origin+`/user_images/`+data.send_user_profile_pic;
                }else{
                    profile_link = ``;
                }
                var newNotificationHtml = `
                    <li class="notification active">
                        <div class="media" onclick="`+custom_link+`" style="cursor:pointer;">
                          <div class="media-left">
                            <div class="media-object">
                              <img src="`+profile_link+`" class="img-circle" alt="image" style="width: 50px; height: 50px;">
                            </div>
                          </div>
                          <div class="media-body">
                            <strong class="notification-title">` + data.message + `</strong>
                            <div class="notification-meta">
                              <small class="timestamp">about a minute ago</small>
                            </div>
                          </div>
                        </div>
                    </li>
                  `;
                  notifications.html(newNotificationHtml + existingNotifications);
                  notificationsCount += 1;
                  notificationsCountElem.attr('data-count', notificationsCount);
                  notificationsWrapper.find('.notif-count').text(notificationsCount);
                  notificationsWrapper.show();
              });

        </script>
    </body>
</html>