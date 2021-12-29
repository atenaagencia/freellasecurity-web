<?php $__env->startSection('content'); ?>
<!-- Masthead-->
<header class="p-5"
    style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        
        <h1 class="text-light py-2">Perfil empresa</h1>
    </div>
</header>

<!-- Services-->
<section class="page-section bg-secondary-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white mb-3">
                    <div class="card-header text-dark bg-transparent border-0">

                        <!-- company's name -->

                        <div class="card-title font-weight-bold h3 py-3"><?php echo e($company->name); ?> - <small><?php echo e($company->getIndustry('industry')); ?></small></div>

                        <!-- end company's name -->

                        <div class="container rounded bg-secondary-custom p-2">
                            <div class="row justify-content-between">
                                <a class="nav-link"><?php echo e(__('Membro desde')); ?>, <?php echo e($company->created_at->format('M d, Y')); ?></a>
                                <a class="nav-link"><i class="fas fa-map-marker text-primary mr-3"></i><?php echo e($company->location); ?></a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-between py-2">
                                <div class="col p-1">
                                    <?php if(Auth::check() && Auth::user()->isFavouriteCompany($company->slug)): ?>
                                    <a href="<?php echo e(route('remove.from.favourite.company', $company->slug)); ?>" class="btn btn-block btn-dark"><i class="fa fa-star text-warning mr-2"></i>Marcada com favorito</a>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('add.to.favourite.company', $company->slug)); ?>" class="btn btn-block btn-dark"><i class="fa fa-star text-warning mr-2"></i>Add como favorito</a>
                                    
                                    <?php endif; ?>
                                </div>
                                <div class="col p-1">
                                    <a href="<?php echo e(route('report.abuse.company', $company->slug)); ?>" class="btn btn-block btn-danger"><i class="fas fa-exclamation-circle text-light mr-2"></i>Denunciar Abuso</a>
                                    
                                </div>
                                <div class="col p-1">
                                    <a href="javascript:;"                                 onclick="send_message()" class="btn btn-block btn-outline-dark font-weight-bold"><i class="fa fa-envelope mr-2"></i>Enviar Mensagem</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        
                        <h4 class="py-2">Sobre a empresa</h4>
                        <p class="text-justify">
                           <?php echo $company->description; ?>

                        </p>
                        <hr>
                        
                        <h4 class="py-3">Histórico de trabalho e feedback</h4>
                        <div class="lead">
                           <?php $__currentLoopData = $projectFeedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($o->jobApply['isCandidateContractStatus'] == "close" && $o->jobApply['isEmployeerContractStatus'] == "close"): ?>
                            <div class="project-review">
                                <h4><?php echo e($o->jobDetails->title); ?></h4>
                                <div class="rating">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="rateyo" data-rateyo-rating="<?php echo e($o->rating); ?>" data-rateyo-num-stars="5"
                                                data-rateyo-score="3">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <span style="padding: 0;margin-top: -5px; margin-right: 3px; font-weight: bold;">
                                                <?php if(strpos($o->rating, ".")): ?>
                                                <?php echo e($o->rating); ?>0
                                                <?php else: ?>
                                                <?php echo e($o->rating); ?>.00
                                                <?php endif; ?>
                                            </span>
                                            <span><?php echo e(\Carbon\Carbon::parse($o->created_at)->format('M Y')); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p style="padding: 5px 0;">
                                    <?php echo e($o->feedback); ?>

                                </p>
                            </div>
                            <hr>
                            <?php elseif($o->jobApply['isCandidateContractStatus'] == "close"
                            && $o->jobApply['isEmployeerContractStatus'] == "open" ||
                            $o->jobApply['isCandidateContractStatus'] == "open"
                            && $o->jobApply['isEmployeerContractStatus'] == "close"): ?>
                            
                            <?php if($o->jobApply['CandidateCloseContract'] <= Carbon\Carbon::now()->subDays(90)): ?>
                                <div class="project-review">
                                    <h4><?php echo e($o->jobDetails->title); ?></h4>
                                    <div class="rating">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <span><?php echo e(\Carbon\Carbon::parse($o->CandidateCloseContract)->format('M Y')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p style="padding: 5px 0;">
                                        No feedback given
                                    </p>
                                </div>
                                <hr>
                                <?php endif; ?>
                                <?php endif; ?>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <hr>
                    </div>
                </div>
                <!--end of card-->

                <div class="card-title font-weight-bold h3 py-4">Trabalhos Abertos</div>
                <?php if(isset($company->jobs) && count($company->jobs)): ?>
                    <?php $__currentLoopData = $company->jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companyJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--unique card: every job have one card-->
                <div class="card border-0 bg-white mb-5">
                    <div class="card-header text-dark pb-0 border-bottom-0">
                        <div class="card-title font-weight-bold h4 pb-0"><a class="text-dark pb-0" href="<?php echo e(route('job.detail', [$companyJob->slug])); ?>" title="<?php echo e($companyJob->title); ?>"><?php echo e($companyJob->title); ?></a></div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify"><?php echo e(str_limit(strip_tags($companyJob->description), 150, '...')); ?></p>
                        <!-- <div class="portfolio-caption-subheading text-left text-muted">
                            <a class="text-dark" href="<?php echo e(route('company.detail', $company->slug)); ?>" title="<?php echo e($company->name); ?>"><?php echo e($company->name); ?></a>
                        </div> -->
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge pt-2 pb-0 badge-secondary"><label class="fulltime" title="<?php echo e($companyJob->getJobType('job_type')); ?>"><?php echo e($companyJob->getJobType('job_type')); ?></label></div>
                        </div>
                    </div>
                    <div class="card-footer pb-1 bg-transparent">
                        <div class="row justify-content-between">
                            <div class="col">
                                <p class="text-dark font-weight-bold pt-1">
                                    <?php echo e($companyJob->created_at->format('M-d-Y')); ?>

                                </p>
                            </div>
                            <div class="col">
                                <a href="<?php echo e(route('job.detail', [$companyJob->slug])); ?>" class="btn btn-success py-2 float-right">Ver detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of unique card-->

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <!--end of col-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <!--card unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h4 class="pb-0 pt-1 text-dark">Detalhes da empresa</h4>
                        <hr>
                        <ul class="p-0 pt-2">
                            <li class="row justify-content-between">
                                <div class="col"><span>E-mail verificado?</span></div>
                                <div class="col">
                                    <?php echo e(((bool)$company->verified)? 'Yes':'No'); ?>

                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Total empregados</span></div>
                                <div class="col">
                                    <?php echo e($company->no_of_employees); ?>

                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>
                                    Estabelecida em</span></div>
                                <div class="col"><span><?php echo e($company->established_in); ?></span></div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Trabalhos atuais</span></div>
                                <div class="col"><span><?php echo e($company->countNumJobs('company_id',$company->id)); ?></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--card's end-->

                <div class="container p-0">
                    <!-- Google Map start -->
                    
                </div>

            </div>
            <!--col end-->

        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>