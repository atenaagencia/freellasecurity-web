<?php $__env->startSection('title-page'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<?php $__env->stopSection(); ?>  
                  
<?php $__env->startSection('content'); ?>
<div class="row">
    <!-- Area Chart -->
    <div class="col-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lorem Ipsum</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aut consequatur molestiae reprehenderit? Facilis animi commodi expedita, illo debitis odit deleniti, excepturi optio perspiciatis pariatur quo, voluptate omnis doloremque in!
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('includes.immediate_available_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>