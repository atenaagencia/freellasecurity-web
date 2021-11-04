<?php $__env->startSection('content'); ?>

<section class="py-5 text-cemter bg-dark">
    <div class="container py-5">
        <h1 class="text-light text-center pt-3">Resetar Senha Empresa</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5 col-sm-11 mx-auto pb-3">
            <div class="card">
                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    

                    <form class="form-horizontal" method="POST" action="<?php echo e(route('company.password.request')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"><?php echo e(__('Email Address')); ?></label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label"><?php echo e(__('Password')); ?></label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm" class="col-md-4 control-label"><?php echo e(__('Confirm Password')); ?></label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark">
                                    <?php echo e(__('Reset Password')); ?>

                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div><!--col-->
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>