<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end --> 
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Add timesheet')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container"> <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="row">
            <?php echo $__env->make('includes.user_dashboard_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9 col-sm-8"> 
                <h3><?php echo e(__('Add timesheet')); ?></h3>
                <div class="userccount">
                    <div class="formpanel"> <?php echo Form::open(array('method' => 'post', 'route' => 'post.milestone.timeline')); ?> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('client') ? ' has-error' : ''); ?>">
                                <select class="form-control" name="client" id="client" onchange="getClientJobslist(this.value)">
                                    <option value="">Select client</option>
                                    <?php if(isset($all_clients) && count($all_clients)): ?>
                                    <?php $__currentLoopData = $all_clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($client['company_id']); ?>"><?php echo e($client['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <?php if($errors->has('client')): ?> <span class="help-block"> <strong><?php echo e($errors->first('client')); ?></strong> </span> <?php endif; ?>
                            </div>
                            </div>

                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('jobsofclient') ? ' has-error' : ''); ?>">
                                <select class="form-control" name="jobsofclient" id="jobsofclient" onchange="getMilestonesList(this.value)">
                                    <option value="">Select job</option>
                                </select>
                                <?php if($errors->has('jobsofclient')): ?> <span class="help-block"> <strong><?php echo e($errors->first('jobsofclient')); ?></strong> </span> <?php endif; ?>
                            </div>
                            </div>

                            <div class="col-md-12">
                               <div class="formrow<?php echo e($errors->has('milestonesofclient') ? ' has-error' : ''); ?>">
                               <select class="form-control" name="milestonesofclient" id="milestonesofclient">
                                    <option value="">Select Milestone</option>
                                   
                                </select>
                                <?php if($errors->has('milestonesofclient')): ?> <span class="help-block"> <strong><?php echo e($errors->first('milestonesofclient')); ?></strong> </span> <?php endif; ?>
                            </div>
                            </div>

                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('whichdate') ? ' has-error' : ''); ?>">
                                    <input type="text" class="form-control" name="whichdate" id="whichdate" class="whichdate" placeholder="Select Date">
                                    <?php if($errors->has('whichdate')): ?> <span class="help-block"> <strong><?php echo e($errors->first('whichdate')); ?></strong> </span> <?php endif; ?>
                                </div>
                                 
                            </div>

                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('hours') ? ' has-error' : ''); ?>">
                                    <select class="form-control" name="hours" id="hours">
                                        <option value="">Select hours for task</option>
                                        <?php for($i = 1; $i <= 16; $i++): ?>
                                             <option value="<?php echo e($i); ?>"><?php echo e($i); ?> H</option>
                                        <?php endfor; ?>  
                                    </select>
                                    <?php if($errors->has('hours')): ?> <span class="help-block"> <strong><?php echo e($errors->first('hours')); ?></strong> </span> <?php endif; ?>
                                </div>
                                 
                            </div>

                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('minutes') ? ' has-error' : ''); ?>">
                                    <select class="form-control" name="minutes" id="minutes">
                                        <option value="">Select minutes for task</option>
                                        <?php for($i = 0; $i <= 60; $i=$i+5): ?>
                                             <option value="<?php echo e($i); ?>"><?php echo e($i); ?> M</option>
                                        <?php endfor; ?>  
                                    </select>
                                    <?php if($errors->has('minutes')): ?> <span class="help-block"> <strong><?php echo e($errors->first('minutes')); ?></strong> </span> <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                                    <textarea class="form-control" name="description" placeholder="Enter Details of task"></textarea>
                                <?php if($errors->has('description')): ?> <span class="help-block"> <strong><?php echo e($errors->first('description')); ?></strong> </span> <?php endif; ?>   
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <input type="submit" class="btn" value="<?php echo e(__('Submit Timesheet')); ?>">
                        <?php echo Form::close(); ?> </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('includes.immediate_available_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>