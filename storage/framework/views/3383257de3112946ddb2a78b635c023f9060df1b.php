<?php $__env->startSection('content'); ?>

<section class="py-5 text-cemter bg-dark">
    <div class="container py-5">
        <h1 class="text-light text-center pt-3">Resetar Senha Empresa</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-11 mx-auto pb-3">
            <div class="card">
                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('company.password.email')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"><?php echo e(__('Informe e-mail cadastrado')); ?></label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark">
                                    <?php echo e(__('Receber link de redefinição de senha')); ?>

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