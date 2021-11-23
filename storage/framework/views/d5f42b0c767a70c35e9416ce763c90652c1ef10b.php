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
        <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css">

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

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('company.home')); ?>">
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
                    <a class="nav-link collapsed" href="<?php echo e(route('post.job')); ?>">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Cadastrar um trabalho</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('posted.jobs')); ?>">
                        <i class="fas fa-fw fa-heart"></i>
                        <span>All Jobs</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('jobs.development.status')); ?>">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Development Status</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('companychats.messages')); ?>">
                        <i class="fas fa-fw fa-comments"></i>
                        <span><?php echo e(__('Chat Messages')); ?>(<span id="my_msgcan_no"></span>)</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('company.followers')); ?>"> <!--/teste/payment-management-->
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
                                <a class="nav-link text-dark font-weight-bold" href="<?php echo e(asset('/')); ?>" role="button">Home</a>
                            </li>
                        </ul>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link bg-wf text-white font-weight-bold" href="<?php echo e(route('post.job')); ?>" role="button">Cadastrar um trabalho</a>
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
                                    <span class="mr-3 d-none d-lg-inline text-dark font-weight-bold"><?php echo e(Auth::guard('company')->user()->name); ?></span>
                                    <img class="img-profile rounded-circle" src="https://via.placeholder.com/150x150">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('company.detail', Auth::guard('company')->user()->slug)); ?>">
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
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
                
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('/js/jquery-2.1.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
        
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <!-- Contact form JS-->
        <script src="<?php echo e(asset('mail/jqBootstrapValidation.js')); ?>"></script>
        <script src="<?php echo e(asset('mail/contact_me.js')); ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('js/custom-scripts.js')); ?>"></script>

    </body>
</html>