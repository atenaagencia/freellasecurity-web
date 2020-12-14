<style>
.nav-pills .nav-link, .nav-pills .nav-link {
    background: #eee;
    color: black !important;
}
.nav-pills .nav-link.active, .nav-pills .nav-link {
    padding: 1rem !important;
    color: white;
}
.tab-pane {
    border: 0 !important;
}
</style>
<?php $__env->startSection('content'); ?>

<section class="py-5 text-cemter" style="background: url('https://images.pexels.com/photos/5473298/pexels-photo-5473298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')no-repeat fixed center center; background-size: cover">
    <div class="container py-5">
        <h1 class="text-white text-center pt-3">Register Page</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="container bg-light">
                <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <ul class="nav nav-pills mb-3 py-4" id="pills-tab" role="tablist">
                    <?php $c_or_e = old('candidate_or_employer', 'candidate'); ?>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link <?php echo e(($c_or_e == 'candidate')? 'active':''); ?> text-center h4" id="candidate-tab" data-toggle="pill" href="#candidate" role="tab" aria-controls="candidate" aria-selected="true">Candidate</a>
                    </li>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link <?php echo e(($c_or_e == 'employer')? 'active':''); ?> text-center h4" id="employer-tab" data-toggle="pill" href="#employer" role="tab" aria-controls="employer" aria-selected="false">Employer</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div id="candidate" class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                        <!-- login form --> 
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            
                            <input type="hidden" name="candidate_or_employer" value="candidate" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Register Area</h3>
                                <hr class="col-6 py-3">
                                <div class="py-2 formrow<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                                    <input id="first_name" type="text" class="form-control col-10 mx-auto" name="first_name" value="<?php echo e(old('first_name')); ?>" required autofocus placeholder="<?php echo e(__('First Name')); ?>">
                                    <?php if($errors->has('first_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('middle_name') ? ' has-error' : ''); ?>">
                                    <input id="middle_name" type="text" class="form-control col-10 mx-auto" name="middle_name" value="<?php echo e(old('middle_name')); ?>" required autofocus placeholder="<?php echo e(__('Middle Name')); ?>">
                                    <?php if($errors->has('middle_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('middle_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                                    <input id="last_name" type="text" class="form-control col-10 mx-auto" name="last_name" value="<?php echo e(old('last_name')); ?>" required autofocus placeholder="<?php echo e(__('Last Name')); ?>">
                                    <?php if($errors->has('last_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="<?php echo e(__('Email Address')); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="<?php echo e(__('Password')); ?>">
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                    <input id="password_confirmation" type="password" class="form-control col-10 mx-auto" name="password_confirmation" value="" required placeholder="<?php echo e(__('Password Confirmation')); ?>">
                                    <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div><br>
                                <div class="container pl-lg-5 pl-md-4 pl-sm-5 pl-xs-5 pt-0 pb-0 py-2 formrow<?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">
                                    <?php
                                    $is_checked = '';
                                    if (old('is_subscribed', 1)) {
                                        $is_checked = 'checked="checked"';
                                    }
                                    ?>
                                    <input type="checkbox" value="1" name="is_subscribed" <?php echo e($is_checked); ?> />
                                    <?php echo e(__('Subscribe to news letter')); ?>

                                    <?php if($errors->has('is_subscribed')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('is_subscribed')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="container pl-lg-5 pl-md-4 pl-sm-5 pl-xs-5 pt-0 pb-0 py-2 formrow<?php echo e($errors->has('terms_of_use') ? ' has-error' : ''); ?>">
                                    <input type="checkbox" value="1" name="terms_of_use"/>
                                    <a href="<?php echo e(url('cms/terms-of-use')); ?>" class="text-dark font-weight-bold"><?php echo e(__('I accept Terms of Use')); ?></a>
                                    <?php if($errors->has('terms_of_use')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('terms_of_use')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-primary" value="<?php echo e(__('Register')); ?>"><h4>Register</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class="lead"><?php echo e(__('Have Account')); ?>? <a class="font-weight-bold text-primary" href="<?php echo e(route('login')); ?>"><?php echo e(__('Sign in')); ?></a></div>
                        </div>
                    </div><!--end of candidate's tab-->
                    <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                        <!-- login employer form --> 
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('company.register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            
                            <input type="hidden" name="candidate_or_employer" value="employer" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Employer Area</h3>
                                <hr class="col-6 py-3">
                                <div class="py-2 formrow<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <input id="name" type="text" class="form-control col-10 mx-auto" name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="<?php echo e(__('Name')); ?>">
                                    <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="<?php echo e(__('Email Address')); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="<?php echo e(__('Password')); ?>">
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="py-2 formrow<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                    <input id="password_confirmation" type="password" class="form-control col-10 mx-auto" name="password_confirmation" value="" required placeholder="<?php echo e(__('Password Confirmation')); ?>">
                                    <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div><br>
                                <div class="container pl-lg-5 pl-md-4 pl-sm-5 pl-xs-5 pt-0 pb-0 py-2 formrow<?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">
                                    <?php
                                    $is_checked = '';
                                    if (old('is_subscribed', 1)) {
                                        $is_checked = 'checked="checked"';
                                    }
                                    ?>
                                    <input type="checkbox" value="1" name="is_subscribed" <?php echo e($is_checked); ?> />
                                    <?php echo e(__('Subscribe to news letter')); ?>

                                    <?php if($errors->has('is_subscribed')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('is_subscribed')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="container pl-lg-5 pl-md-4 pl-sm-5 pl-xs-5 pt-0 pb-0 py-2 formrow<?php echo e($errors->has('terms_of_use') ? ' has-error' : ''); ?>">
                                    <input type="checkbox" value="1" name="terms_of_use"/>
                                    <a href="<?php echo e(url('terms-of-use')); ?>" class="text-dark font-weight-bold"><?php echo e(__('I accept Terms of Use')); ?></a>
                                    <?php if($errors->has('terms_of_use')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('terms_of_use')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-primary" value="<?php echo e(__('Register')); ?>"><h4>Register</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class="lead"><?php echo e(__('Have Account')); ?>? <a class="font-weight-bold text-primary" href="<?php echo e(route('login')); ?>"><?php echo e(__('Sign in')); ?></a></div>
                        </div>
                    </div>
                </div>

            </div><!--main container-->
        </div>
    </div><br>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>