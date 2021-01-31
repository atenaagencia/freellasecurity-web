<?php $__env->startSection('content'); ?> 
    <!-- <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Job Details')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->

    <?php echo $__env->make('job.inc.job', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style type="text/css">
    .userccount p{ text-align:left !important;}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>