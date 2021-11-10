<?php $__env->startSection('title-page'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 font-weight-bold text-dark">Cadastrar um trabalho</h1>
    
</div>
<?php $__env->stopSection(); ?>  
                  
<?php $__env->startSection('content'); ?>
 <?php echo $__env->make('job.inc.job', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>