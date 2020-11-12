@extends('layouts.custom')
<style>
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

::selection {
    background: #3693fe !important;
    text-shadow: none;
}

.img-fluid#custom{
    max-width: 75% !important;
    width: 100% !important;
}


@media (max-width: 767px)
{
    .card a.card-header>.img-fluid{
        display: none !important;
    }
    .portfolio-caption-subheading{
        padding-top: 3.1rem !important;
        padding-bottom: 0 !important;
    }
    .portfolio-caption-subheading>.badge{
        position: relative;
        left: 0;
        bottom: 0;
        margin-bottom: 5rem !important;
    }
    /* a.btn#see_more{
        width: 100%;
    } */

}

</style>
@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-heading display-5 mx-auto col-10">Find the perfect freelance <b class="text-primary">security</b> services for your bussiness.</div>
        <form action="{{route('job.seeker.list')}}" method="get">
        <input type="text" class="main-input form-control col-8 mx-auto bg-transparent py-4">
        <button class="btn btn-primary btn-xl text-uppercase mt-5" href="#services">SEARCH JOB</button>
        </form>
    </div>
</header>


<!-- Clients-->
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 my-3">
                <a href="#!"><img id="custom" class="img-fluid d-block mx-auto" src="{{asset('company_logos/new/1.png')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 my-3">
                <a href="#!"><img id="custom" class="img-fluid d-block mx-auto" src="{{asset('company_logos/new/2.png')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 my-3">
                <a href="#!"><img id="custom" class="img-fluid d-block mx-auto" src="{{asset('company_logos/new/3.png')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 my-3">
                <a href="#!"><img id="custom" class="img-fluid d-block mx-auto" src="{{asset('company_logos/new/4.png')}}" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Services-->
<section class="page-section bg-light-custom" id="services">
    <div class="container">
        <div class="text-center">
            <div class="masthead-heading display-5 text-left text-dark py-4">Browse jobs acording to your necessities</div>
        </div>
        <div class="col-12 card rounded-0 bg-transparent border-0 p-0">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item col-md-4 col-sm-12 p-0">
                    <a class="nav-link py-2 btn-lg text-dark font-weight-bold active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Functional area <i class="fas m-1 fa-angle-down text-light float-right"></i></a>
                </li>
                <li class="nav-item col-md-4 col-sm-12 p-0">
                    <a class="nav-link py-2 btn-lg text-dark font-weight-bold" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cities <i class="fas m-1 fa-angle-down text-light float-right"></i></a>
                </li>
                <li class="nav-item col-md-4 col-sm-12 p-0">
                    <a class="nav-link py-2 btn-lg text-dark font-weight-bold" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Industries <i class="fas m-1 fa-angle-down text-light float-right"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active p-3 bg-white border-0" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <ul class="row teste">
                        {{-- <li class="col-md-4 col-sm-6"><a href="#">Software & Web Development</a></li> --}}
                        @if(isset($topFunctionalAreaIds) && count($topFunctionalAreaIds)) @foreach($topFunctionalAreaIds as
                        $functional_area_id_num_jobs)
                        <?php
                        $functionalArea = App\ FunctionalArea::where('functional_area_id', '=', $functional_area_id_num_jobs->functional_area_id)->lang()->active()->first();
                        ?> @if(null !== $functionalArea)
                        
                        <li class="col-md-4 col-sm-6"><a
                            href="{{route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])}}"
                            title="{{$functionalArea->functional_area}}">{{$functionalArea->functional_area}}
                            <span>({{$functional_area_id_num_jobs->num_jobs}})</span></a>
                        </li>
                        
                        @endif @endforeach @endif
                    </ul>
                </div>
                <div class="tab-pane p-3 fade bg-white border-0" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="row teste">
                        {{-- <li class="col-md-4 col-sm-6"><a href="#">Barrington (2)</a></li> --}}
                        @if(isset($topCityIds) && count($topCityIds))
                        @foreach($topCityIds as $city_id_num_jobs)
                        <?php
                        $city = App\ City::getCityById($city_id_num_jobs->city_id);
                        ?> @if(null !== $city)
                        
                        <li class="col-md-4 col-sm-6 col-xs-6"><a href="{{route('job.list', ['city_id[]'=>$city->city_id])}}"
                                title="{{$city->city}}">{{$city->city}} <span>({{$city_id_num_jobs->num_jobs}})</span></a>
                        </li>
                        
                        @endif @endforeach @endif

                    </ul>
                </div>
                <div class="tab-pane p-3 fade bg-white border-0" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <ul class="row teste">
                        {{-- <li class="col-md-4 col-sm-6"><a href="#">Construction/Cement/Metals (15)</li> --}}
                            @if(isset($topIndustryIds) && count($topIndustryIds)) @foreach($topIndustryIds as $industry_id => $num_jobs)
                            <?php
                            $industry = App\ Industry::where('industry_id', '=', $industry_id)->lang()->active()->first();
                            ?> @if(null !== $industry)
                            <li class="col-md-4 col-sm-6"><a href="{{route('job.list', ['industry_id[]'=>$industry->industry_id])}}"
                                    title="{{$industry->industry}}">{{$industry->industry}} <span>({{$num_jobs}})</span></a>
                            </li>
                            @endif
                        @endforeach
                        @endif
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
            @if(isset($featuredJobs) && count($featuredJobs))
            @foreach($featuredJobs as $featuredJob)
            <?php $company = $featuredJob->getCompany(); ?>
            @if(null !== $company)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 portfolio-item border-0">
                    <a class="card-header portfolio-link p-0 border-0" href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}">
                        <!-- <img class="img-fluid" style="width: 400px; height: 300px;" src="{{asset('company_logos/'.$company->logo)}}" alt="" /> -->
                        <img class="img-fluid" src="{{asset('company_logos/'.$company->logo)}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left text-dark">
                            {{$featuredJob->title}}
                        </div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">
                            <a class="text-dark text-muted" href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a>
                        </div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted" style="position: absolute; top:0; bottom: 10;">
                            <div class="badge p-2 mt-3 mb-3 fulltime badge-primary" title="{{$featuredJob->getJobType('job_type')}}">
                              {{$featuredJob->getJobType('job_type')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
            {{-- <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/job')}}">
                        <img class="img-fluid" src="{{asset('img/portfolio/02-thumbnail.jpg')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left text-dark">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">Power Wave</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">
                            <div class="badge p-2 mt-3 badge-success">Full Time Permanent</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/job')}}">
                        <img class="img-fluid" src="{{asset('img/portfolio/02-thumbnail.jpg')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left text-dark">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">Power Wave</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">
                            <div class="badge p-2 mt-3 badge-success">Full Time Permanent</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/job')}}">
                        <img class="img-fluid" src="{{asset('img/portfolio/02-thumbnail.jpg')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left text-dark">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">Power Wave</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">
                            <div class="badge p-2 mt-3 badge-success">Full Time Permanent</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/job')}}">
                        <img class="img-fluid" src="{{asset('img/portfolio/02-thumbnail.jpg')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left text-dark">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">Power Wave</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">
                            <div class="badge p-2 mt-3 badge-success">Full Time Permanent</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/job')}}">
                        <img class="img-fluid" src="{{asset('img/portfolio/03-thumbnail.jpg')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left text-dark">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">Power Wave</div>
                        <div class="portfolio-caption-subheading text-left text-dark text-muted">
                            <div class="badge p-2 mt-3 badge-danger">Freelance</div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <a class="btn btn-primary btn-xl text-uppercase mt-3 mb-5 float-right" id="see_more" href="{{route('job.list', ['is_featured'=>1])}}">See  More</a><br><br>
    </div>
</section>

<!-- Feature Jobs-->
<section class="page-section bg-white" id="how">
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <div class="card-body p-lg-0 p-md-1 p-sm-2">
                        <h3 class="font-weight-bold text-left text-dark py-3">Search Desired Job.</h3>
                        <p class="lead p-lg-0 p-md-1 p-sm-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card portfolio-item border-0">
                    <div class="card-body p-lg-0 p-md-1 p-sm-2">
                        <h3 class="font-weight-bold text-left text-dark py-3">Send Your Resume.</h3>
                        <p class="lead p-lg-0 p-md-1 p-sm-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


    