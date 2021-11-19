<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Company Posted Jobs')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<?php $__env->startSection('title-page'); ?>
<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                    <!-- job start -->
                    <?php if(isset($jobs) && count($jobs)): ?>
                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $company = $job->getCompany(); ?>
                    <?php if(null !== $company): ?>
                    <li id="job_li_<?php echo e($job->id); ?>" class="nav-link pb-3">
                        <div class="row">
                            <div class="col">
                                <!-- <?php echo e($company->printCompanyImage()); ?> -->
                                <div class="container p-0">
                                    <img src="http://localhost:8000/admin_assets/no-image.png" style="width: 200px" alt="employer" title="employer">
                                </div>
                                <div class="jobinfo">
                                    <div class="companyName">
                                        <a href="<?php echo e(route('company.detail', $company->slug)); ?>" title="<?php echo e($company->name); ?>" class="badge badge-primary"><?php echo e($company->name); ?></a>
                                    </div>
                                    <div class="location">
                                        <label class="fulltime" title="<?php echo e($job->getJobShift('job_shift')); ?>"><?php echo e($job->getJobShift('job_shift')); ?></label> - <span><?php echo e($job->getCity('city')); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="pb-3 font-weight-bold text-dark">Details</h4>
                                <p><?php echo str_limit(strip_tags($job->description), 250, '...'); ?></p>
                                <a href="<?php echo e(route('job.detail', [$job->slug])); ?>" class="btn btn-primary">See more</a>
                            </div>
                            <div class="col-md-12">
                                <h4 class="font-weight-bold text-dark">Actions</h4>
                            </div>
                            <div class="col-md-12 row pt-0">
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="<?php echo e(route('list.favourite.applied.users', [$job->id])); ?>"><?php echo e(__('Hired Freelancer')); ?></a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="<?php echo e(route('list.applied.users', [$job->id])); ?>"><?php echo e(__('List Candidates')); ?></a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="<?php echo e(route('milestones.list', [$job->id])); ?>"><?php echo e(__('Milestones')); ?></a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="<?php echo e(route('timesheet.details', [$job->id])); ?>"><?php echo e(__('Timesheets')); ?></a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="<?php echo e(route('edit.front.job', [$job->id])); ?>"><?php echo e(__('Edit')); ?></a>
                                <a class="nav-link btn btn-outline-danger m-1 font-weight-bold" href="javascript:;" onclick="deleteJob(<?php echo e($job->id); ?>)"><?php echo e(__('Delete')); ?></a>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <!-- job end -->
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
                <?php echo e($jobs->links()); ?>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    function deleteJob(id) {
        var msg = 'Are you sure?';
        if (confirm(msg)) {
            $.post("<?php echo e(route('delete.front.job')); ?>", {
                id: id,
                _method: 'DELETE',
                _token: '<?php echo e(csrf_token()); ?>'
            })
            .done(function(response) {
                if (response == 'ok') {
                    $('#job_li_' + id).remove();
                } else {
                    alert('Request Failed!');
                }
            });
        }
    }
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>