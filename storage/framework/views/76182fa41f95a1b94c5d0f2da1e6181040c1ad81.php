<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/238118/pexels-photo-238118.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 8rem !important;">
    <div class="container mx-auto row justify-content-between">
        <div>
            <h2 class="text-dark"><?php echo e(Auth::user()->name); ?></h2>
            <p class="text-muted">Immediate Available For Work</p>
        </div>
        <div>
            <img src="<?php echo e(asset('admin_assets/no-image.png')); ?>" alt="" width="120px">
        </div>
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
                        <div class="card-title font-weight-bold py-4 row mx-auto justify-content-between">
                            <h3><?php echo e(Auth::user()->name); ?></h3>
                            <a class="float-right h5 text-success">Immediate Available for Work</a>
                        </div>

                        <!-- end company's name -->
                        <div class="container rounded bg-secondary-custom p-2">
                            <div class="row justify-content-between">
                                <a class="nav-link">Member Since, Jul 11, 2018</a>
                                <a class="nav-link"><i class="fas fa-map-marker text-primary mr-3"></i>United States of America</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="py-3">About Me</h5>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <hr>
                        <h5 class="py-3">Education</h5>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. remaining essentially unchanged.
                        </p>
                        <hr>
                        <h5 class="py-3">Experience</h5>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <hr>
                        <h5 class="py-3">Portfolio</h5>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <hr>
                        <h5 class="py-3">Work History and Feedback</h5>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div><!--end of card-->
                
            </div><!--end of col-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <!--card unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h5 class="pb-0 pt-1 text-dark">Candidate Detail</h5><hr>
                        <ul class="p-0 pt-2">
                            <li class="row justify-content-between">
                                <div class="col"><span>Is Email Verified</span></div>
                                <div class="col">
                                    <span>No</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Immediate Available</span></div>
                                <div class="col">
                                    <span>Yes</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Experience</span></div>
                                <div class="col"><span>Fresh</span></div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Career Level</span></div>
                                <div class="col"><span>Entry Level</span></div>
                            </li>
                        </ul>
                    </div>
                </div><!--card's end-->

                <!--card skill unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h5 class="pb-0 pt-1 text-dark">Skills</h5><hr>
                        <ul class="p-0 pt-2">
                            <!-- <li class="row justify-content-between">
                                <div class="col"><span>Is Email Verified</span></div>
                                <div class="col">
                                    <span>No</span>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div><!--card's end-->

                <!--card language unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h5 class="pb-0 pt-1 text-dark">Languages</h5><hr>
                        <ul class="p-0 pt-2">
                            <!-- <li class="row justify-content-between">
                                <div class="col"><span>Is Email Verified</span></div>
                                <div class="col">
                                    <span>No</span>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div><!--card's end-->

                <!--card unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h5 class="pb-0 pt-1 text-dark">Contact</h5><hr>
                        <ul class="p-0 pt-2">
                            <!-- <li class="row justify-content-between">
                                <div class="col"><span>Is Email Verified</span></div>
                                <div class="col">
                                    <span>No</span>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div><!--card's end-->

            </div><!--col end-->
            
            
        </div>
    </div>
    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>