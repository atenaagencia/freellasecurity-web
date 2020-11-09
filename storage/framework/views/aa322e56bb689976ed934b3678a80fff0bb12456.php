<?php $__env->startSection('content'); ?>

<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Report Abuse</h1>
    </div>
</header>

<!-- Page Title End -->
<section class="bg-secondary-custom p-5">
    <div class="container">
        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="row">
            <div class="col-md-8 bg-white p-3 py-4 mx-auto">
                <div class="userccount"> <?php echo Form::open(array('method' => 'post', 'route' => ['report.abuse.company', $slug])); ?>

                    <div class="formpanel"> 
                        <!-- Ad Information -->
                        <h3 class="font-weight-bold py-4"><?php echo e(__('Report Abuse')); ?></h3>            
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="formrow<?php echo e($errors->has('listing_url') ? ' has-error' : ''); ?>">
                                    <?php echo Form::text('company_url', route('company.detail', $slug), array('class'=>'form-control', 'id'=>'company_url', 'placeholder'=>__('URL'), 'required'=>'required', 'readonly'=>'readonly')); ?>                
                                    <?php if($errors->has('company_url')): ?> <span class="help-block"> <strong><?php echo e($errors->first('company_url')); ?></strong> </span> <?php endif; ?> </div>
                            </div>                            
                            <div class="col-md-12 py-3">
                                <div class="formrow<?php echo e($errors->has('your_name') ? ' has-error' : ''); ?>">
                                    <?php
                                    $your_name = (Auth::check()) ? Auth::user()->name : '';
                                    ?>
                                    <?php echo Form::text('your_name', $your_name, array('class'=>'form-control', 'id'=>'your_name', 'placeholder'=>__('Your Name'), 'required'=>'required')); ?>                
                                    <?php if($errors->has('your_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('your_name')); ?></strong> </span> <?php endif; ?> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formrow<?php echo e($errors->has('your_email') ? ' has-error' : ''); ?>">
                                    <?php
                                    $your_email = (Auth::check()) ? Auth::user()->email : '';
                                    ?>
                                    <?php echo Form::text('your_email', $your_email, array('class'=>'form-control', 'id'=>'your_email', 'placeholder'=>__('Your Email'), 'required'=>'required')); ?>                
                                    <?php if($errors->has('your_email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('your_email')); ?></strong> </span> <?php endif; ?> </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="formrow<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                                    <?php echo app('captcha')->display(); ?>

                                    <?php if($errors->has('g-recaptcha-response')): ?> <span class="help-block"> <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong> </span> <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" id="post_ad_btn" class="btn btn-lg btn-danger" value="<?php echo e(__('Report')); ?>">Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>