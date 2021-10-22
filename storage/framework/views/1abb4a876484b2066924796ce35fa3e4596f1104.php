<style>
    @media (min-width: 600px) {
        .img-fluid {
            max-height: 240px !important;
        }
    }
</style>

<?php $__env->startSection('custom-css'); ?>
<style>
img{
    max-width: 100%;
    width: 100%;
}
img#teste{
    width:auto !important;
    height:36;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="p-5"
    style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Companies List</h1>
    </div>
</header>

<!-- Feature Jobs-->
<section class="page-section bg-secondary-custom">
    <div class="container mb-5">
        <div class="row">
            <?php if($companies): ?>
            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="<?php echo e(route('company.detail',$company->slug)); ?>"><?php echo e($company->printCompanyImage()); ?></a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">
                            <a class="text-dark" href="<?php echo e(route('company.detail',$company->slug)); ?>"><?php echo e($company->name); ?></a>
                        </div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <?php echo e($company->location); ?>

                        </div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-primary"><?php echo e(__('Current jobs')); ?> : <?php echo e($company->countNumJobs('company_id',$company->id)); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          
        </div>
        <!--pagination-->
        <div class="row justify-content-between py-4">
            
            <div class="col-md-12 pagiWrap">
           <?php echo e($companies->links()); ?>

            </div>
        </div>
        <!--end of pagination-->
    </div>
    <!--row-->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>