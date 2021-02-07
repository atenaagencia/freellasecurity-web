<!-- <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Page Not Found')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->

<style>
body{
    background: #f4f3f3 !important;
}
</style>
<?php $__env->startSection('content'); ?>

<!-- Masthead-->
<header class="bg-dark 100vh p-5 text-light">
    <div class="container text-center py-5" style="margin-top: 150px; align-itens: center; justify-content: center;">
        <i class="fa fa-2x fa-exclamation-circle text-light mb-4"></i>
        <h2><?php echo e(__('Page Expired')); ?></h2>
        <p><?php echo e(__('The page has expired due to inactivity. Please refresh and try again.')); ?></p>
    </div>
</header>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>