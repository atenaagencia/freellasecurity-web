<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/5483071/pexels-photo-5483071.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Contact Us</h1>
    </div>
</header>

<!-- Page Title End -->
<section class="bg-secondary-custom p-5">
    <!-- About -->
    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center py-4">
                    <h5 class="text-secondary py-2"><?php echo e(__('We Are Here For Your Help')); ?></h5>
                    <h2 class="font-weight-bold"><?php echo e(__('GET IN TOUCH FAST')); ?></h2>
                    <hr class="col-2">
                    <p class="col-8 mx-auto py-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Nemo odio laboriosam inventore beatae illo ut, esse perferendis ducimus suscipit, 
                        dolor magni natus cupiditate doloribus voluptatibus ad. Repellendus nulla ipsa dolorem.
                    </p>
                </div>
                <div class="row justify-content-center"> 
                    <!-- Contact Info -->
                    <div class="col-md-4 py-4">
                        <div class="card bg-secondary-custom border-0 h-100">
                            <div class="card-body">
                                <h4>Address:</h4>
                                <p>Rua Prof. Aprígio Gonzaga 681, Saúde, São Paulo, SP, Brasil. CEP 04303-001</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-md-4 py-4">
                        <div class="card bg-secondary-custom border-0 h-100">
                            <div class="card-body">
                                <h4>E-mail Address:</h4>
                                <p><a class="text-dark" href="mailto:<?php echo e($siteSetting->mail_to_address); ?>"><?php echo e($siteSetting->mail_to_address); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-md-4 py-4">
                        <div class="card bg-secondary-custom border-0 h-100">
                            <div class="card-body">
                                <h4>Phone:</h4>
                                <p class="pb-0 m-0 p-0"><a class="text-dark" href="tel:<?php echo e($siteSetting->site_phone_primary); ?>"><?php echo e($siteSetting->site_phone_primary); ?></a></p>
                                <p class="pb-0 m-0 p-0"><a class="text-dark" href="tel:<?php echo e($siteSetting->site_phone_secondary); ?>"><?php echo e($siteSetting->site_phone_secondary); ?></a></p>
                            </div>
                        </div>
                    </div>
                    
                </div><!--row-->

                <h2 class="font-weight-bold text-left pl-lg-3 pl-md-3 pl-sm-0 py-3">Lorem Ipsum</h2>

                <div class="row py-4">

                    <div class="col-md-4"> 
                        <!-- Google Map -->
                        <div class="container-fluid">
                        <?php echo $siteSetting->site_google_map; ?>

                        </div>
                    </div>

                    <div class="col-md-8">
                        <form method="post" action="<?php echo e(route('contact.us')); ?>" name="contactform" id="contactform">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6<?php echo e($errors->has('full_name') ? ' has-error' : ''); ?>">                  
                                    <?php echo Form::text('full_name', null, array('id'=>'full_name', 'placeholder'=>__('Full Name'), 'required'=>'required', 'class' => 'form-control mb-3', 'autofocus'=>'autofocus')); ?>                
                                    <?php if($errors->has('full_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('full_name')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="col-md-6<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">                  
                                    <?php echo Form::text('email', null, array('id'=>'email', 'placeholder'=>__('Email'), 'required'=>'required', 'class' => 'form-control mb-3')); ?>                
                                    <?php if($errors->has('email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('email')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="col-md-6<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">                  
                                    <?php echo Form::text('phone', null, array('id'=>'phone', 'class' => 'form-control mb-3', 'placeholder'=>__('Phone'))); ?>                
                                    <?php if($errors->has('phone')): ?> <span class="help-block"> <strong><?php echo e($errors->first('phone')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="col-md-6<?php echo e($errors->has('subject') ? ' has-error' : ''); ?>">                  
                                    <?php echo Form::text('subject', null, array('id'=>'subject', 'class' => 'form-control mb-3', 'placeholder'=>__('Subject'), 'required'=>'required')); ?>                
                                    <?php if($errors->has('subject')): ?> <span class="help-block"> <strong><?php echo e($errors->first('subject')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="col-md-12<?php echo e($errors->has('message_txt') ? ' has-error' : ''); ?>">                  
                                    <?php echo Form::textarea('message_txt', null, array('id'=>'message_txt', 'class' => 'form-control mb-3', 'placeholder'=>__('Message'), 'required'=>'required')); ?>                
                                    <?php if($errors->has('message_txt')): ?> <span class="help-block"> <strong><?php echo e($errors->first('message_txt')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="col-md-12<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                                    <?php echo app('captcha')->display(); ?>

                                    <?php if($errors->has('g-recaptcha-response')): ?> <span class="help-block"> <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="col-md-12 py-3">
                                    <button title="" class="btn btn-primary btn-lg" type="submit" id="submit"><?php echo e(__('Submit Now')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!--row-->

            </div><!--card-body-->
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>