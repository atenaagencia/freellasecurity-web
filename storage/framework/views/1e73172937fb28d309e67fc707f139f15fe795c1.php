<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Job Applications')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<?php $__env->startSection('title-page'); ?>
<h1 class="h3 py-4 font-weight-bold text-dark"><?php echo e(__('Job Applications')); ?></h1>
<?php $__env->stopSection(); ?>

<div class="row mx-auto mb-5">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Job Applications')); ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
            <?php if(isset($job_applications) && count($job_applications)): ?>
                <?php $__currentLoopData = $job_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $user = $job_application->getUser();
                        $job = $job_application->getJob();
                        $company = $job->getCompany();
                    ?>
                    <?php if($job_application !== null  && $user !== null && $job !== null && $company !== null ): ?>
                        <ul class="searchList p-0">
                            <li id="" class="nav-link pb-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="container p-0">
                                            <img src="http://localhost:8000/admin_assets/no-image.png" style="width: 200px" alt="employer" title="employer">
                                        </div>
                                        <div class="jobinfo">
                                            <div class="companyName">
                                                <a href="" title="" class="badge badge-primary">username</a>
                                            </div>
                                            <div class="location">
                                                <label class="fulltime" title="">job_shift</label> - <span>job_city</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="pb-3 font-weight-bold text-dark">Details</h4>
                                        <p class="font-weight-bold py-3">expected_salary, salary_currency / salary_period</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Hic saepe repellat odit quisquam aliquam eum voluptatibus veniam cum quae incidunt, a officiis minus ullam earum dolor harum omnis? Porro, sequi.</p>
                                        <a href="" class="btn btn-primary">View Profile</a>
                                    </div>
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-dark">Actions</h4>
                                    </div>
                                    <div class="col-md-12 row pt-0">
                                        <a class="nav-link btn btn-light m-1 font-weight-bold" href="#"><?php echo e(__('Update Review')); ?></a>
                                        <a class="nav-link btn btn-outline-danger m-1 font-weight-bold" href="#"><?php echo e(__('Close Contract')); ?></a>
                                    </div>
                                </div>
                            </li>
                            <hr>
                        </ul>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>