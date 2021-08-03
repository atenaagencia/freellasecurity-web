<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Company Posted Jobs')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<?php $__env->startSection('title-page'); ?>
<h1 class="h3 py-4 font-weight-bold text-dark"><?php echo e(__('Company Posted Jobs')); ?></h1>
<?php $__env->stopSection(); ?>

<div class="row mx-auto mb-5">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Company Posted Jobs')); ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <ul class="searchList p-0">
                    <?php if(isset($job_applications) && count($job_applications)): ?>
                    <?php $__currentLoopData = $job_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-link">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="h4 font-weight-bold text-primary nav-link p-0" title="Milestone number"><?php echo e($job->title); ?></a>
                                <div class="text-justify">
                                    <?php echo str_limit(strip_tags($job->description), 100, '...'); ?>

                                </div>
                            </div>
                            <div class="col-md-4 ml-auto float-right">
                                <div class="col-md-12 p-0">
                                    <h4 class="font-weight-bold text-dark">Actions</h4>
                                </div>
                                <div class="row">
                                    <a href="<?php echo e(route('milestones.list', [$job->id])); ?>" class="btn btn-outline-dark m-1">
                                        <?php echo e(__('View Details')); ?>

                                    </a>
                                    <button type="button" class="btn btn-info m-1">
                                        <?php echo e($job->developmentstatus); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <!-- job end -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>

                <a class="nav-link text-dark"><?php echo e($job_applications->links()); ?></a>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>