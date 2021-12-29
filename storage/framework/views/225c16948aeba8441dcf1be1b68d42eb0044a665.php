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

<section class="py-5 text-cemter" style="background: url('https://images.pexels.com/photos/4064835/pexels-photo-4064835.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')no-repeat fixed center center; background-size: cover">
    <div class="container py-5">
        
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="container bg-light">
                <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <ul class="nav nav-pills mb-3 py-4" id="pills-tab" role="tablist">
                    <?php
                        $c_or_e = old('candidate_or_employer', 'candidate');
                        ?>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link <?php echo e(($c_or_e == 'candidate')? 'active':''); ?> text-center h4" id="candidate-tab" data-toggle="pill" href="#candidate" role="tab" aria-controls="candidate" aria-selected="true">Candidato</a>
                    </li>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link <?php echo e(($c_or_e == 'employer')? 'active':''); ?> text-center h4" id="employer-tab" data-toggle="pill" href="#employer" role="tab" aria-controls="employer" aria-selected="false">Empresa</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div id="candidate" class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                        <!-- login form --> 
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            
                            <input type="hidden" name="candidate_or_employer" value="candidate" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Área do candidato</h3>
                                <hr class="col-6">
                                

                                <div class="mt-2 py-3 formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="<?php echo e(__('Informe e-mail')); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="<?php echo e(__('Senha')); ?>">
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-dark" value="<?php echo e(__('Login')); ?>"><h4>Acessar</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class=""><?php echo e(__('Novo por aqui')); ?>? <a class="font-weight-bold text-primary" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registre-se')); ?></a></div>
                            <div class=""><?php echo e(__('Esqueceu sua senha?')); ?>? <a class="font-weight-bold text-primary" href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Clique aqui')); ?></a></div>
                        </div>
                    </div><!--end of candidate's tab-->
                    <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                        <!-- login employer form --> 
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('company.login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            
                            <input type="hidden" name="candidate_or_employer" value="employer" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Área da empresa</h3>
                                <hr class="col-6">
                                

                                <div class="mt-2 py-3 formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="<?php echo e(__('E-mail')); ?>">
                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="<?php echo e(__('Senha')); ?>">
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-dark" value="<?php echo e(__('Login')); ?>"><h4>Acessar</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login employer form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class=""><?php echo e(__('Novo por aqui')); ?>? <a class="font-weight-bold text-primary" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registre-se')); ?></a></div>
                            <div class=""><?php echo e(__('Esqueceu sua senha')); ?>? <a class="font-weight-bold text-primary" href="<?php echo e(route('company.password.request')); ?>"><?php echo e(__('Clique Aqui')); ?></a></div>
                        </div>
                    </div>
                </div>

            </div><!--main container-->
        </div>
    </div><br>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>