<?php $__env->startSection('custom-css'); ?>
<style>
img{
    max-width: 100%;
    width: 50%;
}
img#teste{
    width:auto !important;
    height:36;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Masthead-->

<?php
$company = $job->getCompany();
?>

<header class="p-5" style="background: url('https://images.pexels.com/photos/4064840/pexels-photo-4064840.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Job Detail</h1>
    </div>
</header>

<!-- Services-->
<section class="page-section bg-secondary-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white h-100">
                    <div class="card-header text-dark bg-transparent border-0">
                        <div class="card-title font-weight-bold h3 py-3"><?php echo e($job->title); ?></div>
                        <div class="container rounded bg-secondary-custom p-2">
                            <div class="row justify-content-between">
                                <a class="nav-link">Date Posted: <?php echo e(date('d-m-Y', strtotime($job->created_at))); ?></a>
                                <a class="nav-link h4"><?php if(!(bool)$job->hide_salary): ?>
                                <div class="salary"><?php echo e(__('Project Cost')); ?>: <strong><?php echo e($job->salary_from.' '.$job->salary_currency); ?></strong></div>
                                <?php endif; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="py-3">Job description</h4>
                        <p class="lead">
                         <?php echo $job->description; ?>

                        </p>
                        <hr>
                        <h4 class="py-3">Skills Required</h4>
                        <ul class="nav d-flex d-inline-block">
                           <?php echo $job->getJobSkillsList(); ?>

                       
                        </ul>
                        <hr>
                    </div>
                </div>
                <!--end of card-->
            </div>
            <!--end of col-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white p-0 mb-3">
                    <div class="container p-0 img-responsive">
                        <div class="row mx-auto justify-content-center">
                            <div class="col-md-12 text-center pt-3">
                                <a href="<?php echo e(route('company.detail',$company->slug)); ?>" class="m-0">
                                    <figure class="img-responsive img-fluid"><?php echo e($company->printCompanyImage()); ?></figure>
                                </a>
                                <!-- <a href="<?php echo e(route('company.detail',$company->slug)); ?>" class="ratio img-responsive img-circle"></a> -->
                            </div>
                        </div>
                    </div>
                    <h4 class="pt-1 pb-0 text-center text-dark"><?php echo e($company->name); ?></h4>
                    <p class="text-center"><?php echo e($company->getLocation()); ?></p><hr>
                    <a href="<?php echo e(route('company.detail',$company->slug)); ?>" class="card-title pb-3 text-center text-dark">
                      <?php echo e(App\Company::countNumJobs('company_id', $company->id)); ?> <?php echo e(__('Current Jobs Openings')); ?>

                    </a>
                </div>
                <!--card's end-->

                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h4 class="pb-0 pt-1 text-dark">Job Detail</h4>
                        <hr>
                        <ul class="p-0 pt-2">
                            <li class="row justify-content-between">
                                <div class="col">Location</div>
                                <div class="col">
                                 <span><?php echo e(str_replace( ', ', '', $job->getLocation() )); ?></span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">Company</div>
                                <div class="col">
                                  <a class="text-dark" href="<?php echo e(route('company.detail', $company->slug)); ?>"><?php echo e($company->name); ?></a>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">Career Level</div>
                                <div class="col"><span><?php echo e($job->getCareerLevel('career_level')); ?></span></div>
                            </li>
                            <li class="row">
                                <div class="col">Positions</div>
                                <div class="col"><span><?php echo e($job->num_of_positions); ?></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--card's end-->

                <div class="container p-0">
                    <button class="btn btn-dark btn-block py-3 mb-3">APPLY FOR THIS JOB</button>
                </div>

            </div>
            <!--col end-->

        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>