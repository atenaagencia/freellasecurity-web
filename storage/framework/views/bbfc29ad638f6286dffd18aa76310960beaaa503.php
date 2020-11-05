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
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!-- <a class="navbar-brand text-white js-scroll-trigger" href="#page-top">Freela <b class="text-info">Security</b></a> -->
                <a class="navbar-brand text-white js-scroll-trigger" href="<?php echo e(asset('/teste')); ?>"><img src="<?php echo e(asset('img/logos/main-logo.png')); ?>" alt=""></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('/teste/jobs')); ?>">Jobs</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('/teste/companies')); ?>">Companies</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('/teste/contact')); ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-primary" href="<?php echo e(asset('/login')); ?>">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
        
        <div class="py-4 bg-light-custom p-5"> 
            <div class="container">
                <div class="row"> 
        
                    <!--Quick Links-->
                    <div class="col-md-3 col-sm-6 pr-4">
                        <h5 class="pl-0 pr-0 pb-3">Quick Links</h5>
                        <!--Quick Links menu Start-->
                        <ul class="p-0" id="footer">
                            <li><a href="http://vps23865.publiccloud.com.br">Home</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/contact-us">Contact Us</a></li>
                            <li class="postad"><a href="http://vps23865.publiccloud.com.br/post-job">Post a Job</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/faq">FAQs</a></li>                    
                            <li class=""><a href="http://vps23865.publiccloud.com.br/cms/terms-of-use">Terms Of Use</a></li>
                        </ul>
                    </div>
                    <!--Quick Links menu end-->
        
                    <div class="col-md-3 col-sm-6 pr-4">
                        <h5 class="pl-0 pr-0 pb-3">Jobs By Functional Area</h5>
                        <!--Quick Links menu Start-->
                        <ul class="p-0" id="footer">
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=16">Clerical</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=14">Business Management</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=8">Advertising</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=1">Accountant</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=32">Electronics Technician</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=18">Computer Hardware</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=6">Administration Clerical</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=15">Business Systems Analyst</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=19">Computer Networking</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                        </ul>
                    </div>
        
                    <!--Jobs By Industry-->
                    <div class="col-md-3 col-sm-6 pr-4">
                        <h5 class="pl-0 pr-0 pb-3">Jobs By Industry</h5>
                        <!--Industry menu Start-->
                        <ul class="p-0" id="footer">
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=28">Electronics</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=17">Construction/Cement/Metals</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=49">Consultants</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=7">Advertising/PR</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=38">Health &amp; Fitness</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=1">Information Technology</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=32">Fashion</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=24">Travel/Tourism/Transportation</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=10">Manufacturing</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=13">Agriculture/Fertilizer/Pesticide</a></li>
                        </ul>
                        <!--Industry menu End-->
                        <div class="clear"></div>
                    </div>
        
                    <!--About Us-->
                    <div class="col-md-3 col-sm-12">
                        <h5 class="pl-0 pr-0 pb-3">Contact Us</h5>
                        <p class="font-weight-bold">Rua Prof. Aprígio Gonzaga 681, Saúde, São Paulo, SP, Brasil. CEP 04303-001</p>
                        <div class="font-weight-bold">
                            <a href="mailto:support@jobsportal.com" class="text-dark">support@jobsportal.com</a>
                        </div>
                        <div class="font-weight-bold">
                            <a href="tel:+92 12 1234567" class="text-dark">+92 12 1234567</a>
                        </div>
                        <!-- Social Icons -->
                        <div class="py-3">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-google-plus-square" aria-hidden="true"></i></a>
                            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-2x text-dark m-1 fa-twitter-square" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://linkedin.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-linkedin" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-2x text-dark m-1 fa-youtube-square" aria-hidden="true"></i></a>
                        </div>
                        <!-- Social Icons end --> 
        
                    </div>
                    <!--About us End--> 
        
                </div>
            </div>
            
        </div>

        
        <!-- Footer-->
        <footer class="footer bg-light-custom py-4">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 text-lg-left">Copyright © Freellas Security 2020</div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3 text-dark" href="#!">Privacy Policy</a>
                        <a href="#!" class="text-dark">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo e(asset('mail/jqBootstrapValidation.js')); ?>"></script>
        <script src="<?php echo e(asset('mail/contact_me.js')); ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('js/custom-scripts.js')); ?>"></script>
    </body>
</html>