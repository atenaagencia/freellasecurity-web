<?php $__env->startSection('content'); ?> 
<!-- Header start --> 
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Header end --> 
<!-- Inner Page Title start --> 
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Company Followers')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            <?php echo $__env->make('includes.company_dashboard_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9 col-sm-8"> 
                <div class="myads">
                    <h3><?php echo e(__('Company Followers')); ?></h3>
                    <ul class="searchList">
                        <!-- job start --> 
                        <?php if(isset($users) && count($users)): ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="row">
                                <div class="col-md-9 col-sm-9">
                                    <div class="jobimg"><?php echo e($user->printUserImage(100, 100)); ?></div>
                                    <div class="jobinfo">
                                        <h3><a href="<?php echo e(route('user.profile', $user->id)); ?>"><?php echo e($user->getName()); ?></a></h3>
                                        <div class="location"> <?php echo e($user->getLocation()); ?></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="listbtn"><a href="<?php echo e(route('user.profile', $user->id)); ?>"><?php echo e(__('View Profile')); ?></a></div>
                                </div>
                            </div>
                            <p><?php echo e(str_limit($user->getProfileSummary('summary'),150,'...')); ?></p>
                        </li>
                        <!-- job end --> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>