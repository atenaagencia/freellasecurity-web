<?php $__env->startSection('content'); ?>
<!-- Header start -->

<!-- Header end --> 
<header class="p-5" style="background: url('https://images.pexels.com/photos/4064840/pexels-photo-4064840.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Resetar Senha
        </h1>
    </div>
</header>
<!-- Inner Page Title start -->

<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 mt-5">
                <div class="panel panel-default">
                    
                    <div class="panel-body mx-auto">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('password.request')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="token" value="<?php echo e($token); ?>">
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label"><?php echo e(__('Email')); ?></label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label"><?php echo e(__('Senha')); ?></label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                <label for="password-confirm" class="col-md-4 control-label"><?php echo e(__('Confirme Senha')); ?></label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Resetar Senha')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>