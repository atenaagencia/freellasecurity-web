<?php $__env->startSection('content'); ?> 
<!-- Header start --> 
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Header end --> 
<!-- Inner Page Title start --> 
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Add candidate card details')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container"> <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="row">
             <?php echo $__env->make('includes.company_dashboard_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-8">
                <div class="userccount">
                    <div class="formpanel"> <?php echo Form::open(array('method' => 'post', 'route' => ['post.candidate.card'])); ?> 
                        <!-- Job Information -->
                        <h5>Card Details</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                                
                                <input type="text" class="form-control" name="first_name" placeholder="Enter first name as on card">
                                     <?php if($errors->has('first_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('first_name')); ?></strong> </span> <?php endif; ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                                
                                <input type="text" class="form-control" name="last_name" placeholder="Enter last name as on card">
                                     <?php if($errors->has('last_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('last_name')); ?></strong> </span> <?php endif; ?>
                            </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('card_number') ? ' has-error' : ''); ?>">
                                    <input type="number" class="form-control" name="card_number" placeholder="Enter card number">
                                     <?php if($errors->has('card_number')): ?> <span class="help-block"> <strong><?php echo e($errors->first('card_number')); ?></strong> </span> <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('card_type') ? ' has-error' : ''); ?>">
                                   <select class="form-control" name="card_type">
                                       <option value="visa">visa</option>
                                       <option value="platinum">platinum</option>
                                   </select>
                                     <?php if($errors->has('card_type')): ?> <span class="help-block"> <strong><?php echo e($errors->first('card_type')); ?></strong> </span> <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('expire_year') ? ' has-error' : ''); ?>"> 
                                    <select class="form-control" name="expire_year">
                                       <option value="">Expire Year</option>
                                       <?php $now = date('Y');
                                              $last = date('Y') + 10;
                                        ?>
                                        <?php for($i = $now; $i <= $last; $i++): ?>
                                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                   </select>
                                    <?php if($errors->has('expire_year')): ?> <span class="help-block"> <strong><?php echo e($errors->first('expire_year')); ?></strong> </span> <?php endif; ?>
                                </div>
                            </div>
                            <input type="hidden" name="milestone_id" value="<?php echo e($milestoneId); ?>">
                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('expire_month') ? ' has-error' : ''); ?>"> 
                                    <select class="form-control" name="expire_month">
                                       <option value="">Expire Month</option>
                                        <?php for($i = 1; $i <= 12; $i++): ?>
                                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                   </select>
                                    <?php if($errors->has('expire_month')): ?> <span class="help-block"> <strong><?php echo e($errors->first('expire_month')); ?></strong> </span> <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow<?php echo e($errors->has('cvv') ? ' has-error' : ''); ?>">
                                <input type="number" class="form-control" name="cvv" placeholder="Enter cvv number">
                                <?php if($errors->has('cvv')): ?> <span class="help-block"> <strong><?php echo e($errors->first('cvv')); ?></strong> </span> <?php endif; ?>
                            </div>
                            </div>
                        
                        </div>
                        <br>
                        <input type="submit" class="btn" value="<?php echo e(__('Submit card details')); ?>">
                        <?php echo Form::close(); ?> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>