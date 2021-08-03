<?php $__env->startSection('title-page'); ?>
<!-- Page Heading -->
<div class="container row justify-content-left py-3">
    <h1 class="h3 font-weight-bold text-dark">My Favourite Jobs</h1>
</div>
<?php $__env->stopSection(); ?>  
                  
<?php $__env->startSection('content'); ?>

<div class="py-4">
    <div class="col-md-10">
        <div class="card h-100 shadow rounded-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Lorem Ipsum')); ?></h6>
            </div>
            <div class="card-body bg-white">
               <div class="myads">
                        <h3><?php echo e(__('Favourite Jobs')); ?></h3>
                        <ul class="searchList">
                            <!-- job start -->
                            <?php if(isset($project) && count($project)): ?>
                            <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $job = $projects->getJob(); $company = $job->getCompany(); ?>
                            <?php if(null !== $job): ?>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="jobimg"><?php echo e($company->printCompanyImage()); ?></div>
                                        <div class="jobinfo">
                                            <h3><a href="<?php echo e(route('job.detail', [$job->slug])); ?>" title="<?php echo e($job->title); ?>"><?php echo e($job->title); ?></a>
                                            </h3>
                                            <div class="companyName"><a href="<?php echo e(route('company.detail', $company->slug)); ?>"
                                                    title="<?php echo e($company->name); ?>"><?php echo e($company->name); ?></a></div>
                                            <div class="location">
                                                <label class="fulltime"
                                                    title="<?php echo e($job->getJobShift('job_shift')); ?>"><?php echo e($job->getJobShift('job_shift')); ?></label>
                                                - <span><?php echo e($job->getCity('city')); ?></span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="listbtn"><a href="<?php echo e(route('job.detail', [$job->slug])); ?>"><?php echo e(__('View Details')); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo str_limit(strip_tags($job->description), 150, '...'); ?></p>
                            </li>
                            <!-- job end -->
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    
                        <?php echo e($project->links()); ?>

                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('includes.immediate_available_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>