<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/slick.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/slick-theme.css')); ?>">

<style>
.slider {
    width: 100%;
    height: 150px;
    margin: 100px auto;
    margin-top: 30px !important;
}
.slick-prev, .slick-next {
    display: none !important;
}
.nav-pills .nav-link {
    /* background: white; */
    /* margin: 2px; */
    /* border-radius: 30px !important; */
    padding-left: 2rem;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #3693fe !important;
}
input{
    color: white !important;
    /* font-weight: 900 !important; */
    font-size: 1.7rem !important;
    text-align: center !important;
}

ul{
    list-style: none !important;
}
::selection {
    background: #3693fe !important;
    text-shadow: none;
    color: white !important;
}

ul li.nav-item a.btn.btn-outline-dark{
    text-transform: capitalize !important;
    margin-bottom: 0.5rem;
    font-family: "Montserrat";
    font-weight: 500;
    line-height: 1.2;
    padding: 0.5rem;
    border:0;
    background: #ececec;
}

ul li.nav-item a.btn.btn-outline-dark:hover{
    background: #343a40;
    color: white;
}

@media  screen and (max-width: 600px){
    .slider {
        width: 90% !important;
    }
}

@media (max-width: 767px)
{
    .card a.card-header>.img-fluid{
        display: none !important;
    }
    .portfolio-caption-subheading{
        /* padding-top: 3.1rem !important; */
        padding-bottom: 0 !important;
    }
    .portfolio-caption-subheading>.badge{
        position: relative;
        left: 0;
        bottom: 0;
        /* margin-bottom: 5rem !important; */
    }
    .slider {
        width: 75% !important;
    }

}

@media (max-width: 1366px)
{
    .slider {
        width: 70% !important;
    }  
}

</style>
<?php $__env->startSection('content'); ?>
<header class="masthead">
    <div class="container">
        <div class="masthead-heading display-5 mx-auto col-10">Find the perfect freelance security services for your bussiness.</div>
        <form action="<?php echo e(route('job.list')); ?>" method="get">
        <input type="text" class="main-input form-control col-7 mx-auto bg-transparent py-4" name="search">
        <button class="btn btn-primary btn-xl text-uppercase mt-5" href="#services">SEARCH JOB</button>
        </form>
    </div>
</header>

<!-- Clients-->
<div class="container center slider">
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/1.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/2.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/3.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/4.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/1.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/2.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/3.png')); ?>" alt="" />
    </div>
    <div>
        <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('company_logos/new/4.png')); ?>" alt="" />
    </div>
</div>

<section class="page-section bg-light-custom" id="services">
    <div class="container">
        <div class="text-center">
            <div class="masthead-heading display-5 text-left text-dark py-4">Browse jobs acording to your necessities</div>
        </div>
        <div class="col-12 card rounded-0 bg-transparent border-0 p-0">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item col-md-4 col-sm-12 p-0">
                    <a class="nav-link py-2 btn-lg text-dark font-weight-bold active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Functional area <i class="fas m-1 fa-angle-down float-right"></i></a>
                </li>
                <li class="nav-item col-md-4 col-sm-12 p-0">
                    <a class="nav-link py-2 btn-lg text-dark font-weight-bold" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cities <i class="fas m-1 fa-angle-down float-right"></i></a>
                </li>
                <li class="nav-item col-md-4 col-sm-12 p-0">
                    <a class="nav-link py-2 btn-lg text-dark font-weight-bold" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Industries <i class="fas m-1 fa-angle-down float-right"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active p-3 bg-white border-0" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <ul class="row teste">
                        
                        <?php if(isset($topFunctionalAreaIds) && count($topFunctionalAreaIds)): ?> <?php $__currentLoopData = $topFunctionalAreaIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functional_area_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $functionalArea = App\ FunctionalArea::where('functional_area_id', '=', $functional_area_id_num_jobs->functional_area_id)->lang()->active()->first();
                        ?> <?php if(null !== $functionalArea): ?>
                        
                        <li class="col-md-4 col-sm-6"><a
                            href="<?php echo e(route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])); ?>"
                            title="<?php echo e($functionalArea->functional_area); ?>"><?php echo e($functionalArea->functional_area); ?>

                            <span>(<?php echo e($functional_area_id_num_jobs->num_jobs); ?>)</span></a>
                        </li>
                        
                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                </div>
                <div class="tab-pane p-3 fade bg-white border-0" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="row teste">
                        
                        <?php if(isset($topCityIds) && count($topCityIds)): ?>
                        <?php $__currentLoopData = $topCityIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $city = App\ City::getCityById($city_id_num_jobs->city_id);
                        ?> <?php if(null !== $city): ?>
                        
                        <li class="col-md-4 col-sm-6 col-xs-6"><a href="<?php echo e(route('job.list', ['city_id[]'=>$city->city_id])); ?>"
                                title="<?php echo e($city->city); ?>"><?php echo e($city->city); ?> <span>(<?php echo e($city_id_num_jobs->num_jobs); ?>)</span></a>
                        </li>
                        
                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>

                    </ul>
                </div>
                <div class="tab-pane p-3 fade bg-white border-0" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <ul class="row teste">
                        
                            <?php if(isset($topIndustryIds) && count($topIndustryIds)): ?> <?php $__currentLoopData = $topIndustryIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry_id => $num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $industry = App\ Industry::where('industry_id', '=', $industry_id)->lang()->active()->first();
                            ?> <?php if(null !== $industry): ?>
                            <li class="col-md-4 col-sm-6"><a href="<?php echo e(route('job.list', ['industry_id[]'=>$industry->industry_id])); ?>"
                                    title="<?php echo e($industry->industry); ?>"><?php echo e($industry->industry); ?> <span>(<?php echo e($num_jobs); ?>)</span></a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Jobs-->
<section class="page-section bg-secondary-custom" id="services">
    <div class="container mb-5">
        <div class="text-left py-3">
            <div class="masthead-heading display-5 text-left text-dark">Feature Jobs</div>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
        <div class="row">
            <?php if(isset($featuredJobs) && count($featuredJobs)): ?>
            <?php $__currentLoopData = $featuredJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $company = $featuredJob->getCompany(); ?>
            <?php if(null !== $company): ?>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card portfolio-item rounded-0 border-0 bg-white shadow-sm">
                    <div class="row justify-content-left">
                        <div class="col-12">
                            <div class="card-header border-0 rounded-0">
                                <div class="portfolio-caption-heading">
                                    <a href="<?php echo e(route('job.detail', [$featuredJob->slug])); ?>" title="<?php echo e($featuredJob->title); ?>" class="text-left text-dark"><?php echo e($featuredJob->title); ?></a>
                                </div>
                            </div>
                            <div class="card-body bg-white portfolio-caption text-justify">
                                <!-- <span class="pl-2 font-weight-bold">Skills required:</span> -->
                                <h6 class="pl-2 text-dark">Skills Required</h6>
                                <div class="portfolio-caption-subheading p-0">
                                    <ul class="nav d-flex d-inline-block text-capitalize">
                                       <?php echo $featuredJob->getJobSkillsList(); ?>

                                    </ul>
                                </div>
                                <hr>
                                <div class="portfolio-caption-subheading text-dark text-muted">
                                    <span class="mr-2 h6">Client:</span><a class="text-dark text-muted" href="<?php echo e(route('company.detail', $company->slug)); ?>" title="<?php echo e($company->name); ?>"><?php echo e($company->name); ?></a>
                                    <div class="badge p-2 fulltime badge-secondary float-right" title="<?php echo e($featuredJob->getJobType('job_type')); ?>">
                                    <?php echo e($featuredJob->getJobType('job_type')); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="container mt-5 py-3 border-top">
            <div class="row">
                <h4 class="text-dark">Would you like to see more job openings?</h4>
                <a class="btn btn-primary btn-xl text-uppercase ml-auto" id="see_more" href="<?php echo e(route('job.list', ['is_featured'=>1])); ?>">See  More</a><br><br>
            </div>
        </div>
    </div>
</section>

<!-- Feature Jobs-->
<section class="page-section border-top bg-white" id="how">
    <div class="container">
        <div class="text-left py-3">
            <div class="masthead-heading display-5 text-left text-dark">How it Works</div>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <div class="card-body p-lg-0 p-md-1 p-sm-2">
                        <h3 class="font-weight-bold text-left text-dark py-3">Create An Account.</h3>
                        <p class="lead p-lg-0 p-md-1 p-sm-2">
                            Create a free account to be enable for available jobs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <div class="card-body p-lg-0 p-md-1 p-sm-2">
                        <h3 class="font-weight-bold text-left text-dark py-3">Search Desired Job.</h3>
                        <p class="lead p-lg-0 p-md-1 p-sm-2">
                            You can search for a job by area, city and country of your choice.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <div class="card-body p-lg-0 p-md-1 p-sm-2">
                        <h3 class="font-weight-bold text-left text-dark py-3">Send Your Resume.</h3>
                        <p class="lead p-lg-0 p-md-1 p-sm-2">
                            Send your resume so that employers can get to know you better.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo e(asset('js/slick.js')); ?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    
$('.center').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	
</script>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>