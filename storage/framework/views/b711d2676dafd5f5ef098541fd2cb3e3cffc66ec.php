<?php $__env->startSection('title-page'); ?>
<!-- Page Heading -->
<div class="container row justify-content-left py-3">
    <h1 class="h3 font-weight-bold text-dark">Payment Management</h1>
</div>
<?php $__env->stopSection(); ?>  
                  
<?php $__env->startSection('content'); ?>

<div class="py-4">
    <div class="col-md-10">
        <div class="card h-100 shadow rounded-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Paypal Configuration Details')); ?></h6>
            </div>
            <div class="card-body bg-white">
                <p class="lead text-dark font-weight-bold">Please add your Email and mobile number which is connected to your paypal.</p>
                <hr>
                <p class="text-dark font-weight-bold">Email Id : Not added</p>
                <p class="text-dark font-weight-bold">Mobile Numner : Not added</p>
                <hr>
                <button class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('includes.immediate_available_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>