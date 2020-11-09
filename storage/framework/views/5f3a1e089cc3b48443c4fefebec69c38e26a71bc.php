<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Company Detail</h1>
    </div>
</header>

<!-- Services-->
<section class="page-section bg-secondary-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white mb-3">
                    <div class="card-header text-dark bg-transparent border-0">

                        <!-- company's name -->
                        
                        <div class="card-title font-weight-bold h3 py-3">Power Color</div>

                        <!-- end company's name -->

                        <div class="container rounded bg-secondary-custom p-2">
                            <div class="row justify-content-between">
                                <a class="nav-link">Member Since, Jul 11, 2018</a>
                                <a class="nav-link"><i class="fas fa-map-marker text-primary mr-3"></i>Your Location Address USA</a>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-between py-2">
                                <div class="col p-1">
                                    <a href="" class="btn btn-block btn-dark"><i class="fa fa-star text-warning mr-2"></i>Add to Favourite</a>
                                </div>
                                <div class="col p-1">
                                    <a href="" class="btn btn-block btn-danger"><i class="fas fa-exclamation-circle text-light mr-2"></i>Report Abuse</a>
                                </div>
                                <div class="col p-1">
                                    <a href="" class="btn btn-block btn-light font-weight-bold"><i class="fa fa-envelope text-dark mr-2"></i>Send a message</a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="py-3">About Company</h4>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, 
                            remaining essentially unchanged.
                        </p>
                        <hr>
                        <h4 class="py-3">Work history and feedback</h4>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. remaining essentially unchanged.
                        </p>
                        <hr>
                    </div>
                </div><!--end of card-->

                <div class="card-title font-weight-bold h3 py-4">Jobs Openings</div>

                <!--unique card: every job have one card-->
                <div class="card border-0 bg-white mb-5">
                    <div class="card-header text-light bg-dark">
                        <div class="card-title font-weight-bold h3">Research on Internationalization</div>
                    </div>
                    <div class="card-body">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="portfolio-caption-subheading text-left text-muted">Power Wave</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-success">Full Time Permanent</div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="row justify-content-between">
                            <div class="col">
                                <p class="lead text-secondary font-weight-bold pt-1">27-09-2020</p>
                            </div>
                            <div class="col">
                                <a href="<?php echo e(asset('teste/job')); ?>" class="btn btn-dark py-2 float-right">View details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end of unique card-->

                
            </div><!--end of col-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <!--card unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h4 class="pb-0 pt-1 text-dark">Company Detail</h4><hr>
                        <ul class="p-0 pt-2">
                            <li class="row justify-content-between">
                                <div class="col"><span>Is Email Verified</span></div>
                                <div class="col">
                                    <span>No</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Total Employees</span></div>
                                <div class="col">
                                    <span>301-600</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Established In</span></div>
                                <div class="col"><span>2002</span></div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Current jobs</span></div>
                                <div class="col"><span>5</span></div>
                            </li>
                        </ul>
                    </div>
                </div><!--card's end-->

                <div class="container p-0">
                    <!-- Google Map start -->
                    
                </div>

            </div><!--col end-->
            
        </div>
    </div>
    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>