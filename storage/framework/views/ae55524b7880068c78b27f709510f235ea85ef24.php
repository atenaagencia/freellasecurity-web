<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Editar Perfil')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<?php $__env->startSection('title-page'); ?>
<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h1 class="h3 py-4 font-weight-bold text-dark"><?php echo e(__('Editar Perfil')); ?></h1>
<?php $__env->stopSection(); ?>

<div class="row mx-auto mb-5">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Editar Perfil')); ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
<?php echo $__env->make('company.inc.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>