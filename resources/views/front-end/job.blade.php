@extends('layouts.custom')

@section('content')
<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Job Detail</h1>
    </div>
</header>

<!-- Services-->
<section class="page-section bg-secondary-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white h-100">
                    <div class="card-header text-dark bg-transparent border-0">
                        <div class="card-title font-weight-bold h3 py-3">Research on Internationalization</div>
                        <div class="container rounded bg-secondary-custom p-2">
                            <div class="row justify-content-between">
                                <a class="nav-link">Date Posted: 16-07-2020</a>
                                <a class="nav-link h4">Project Cost: 1200 USD</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="py-3">Job description</h4>
                        <p class="lead">
                            is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, 
                            remaining essentially unchanged.
                        </p>
                        <hr>
                        <h4 class="py-3">Skills Required</h4>
                        <ul class="nav d-flex d-inline-block">
                            <li class="nav-item"><a class="btn btn-outline-dark m-2 nav-link" href="http://vps23865.publiccloud.com.br/jobs?job_skill_id%5B%5D=8">HTML</a></li>
                            <li class="nav-item"><a class="btn btn-outline-dark m-2 nav-link" href="http://vps23865.publiccloud.com.br/jobs?job_skill_id%5B%5D=10">JavaScript</a></li>
                            <li class="nav-item"><a class="btn btn-outline-dark m-2 nav-link" href="http://vps23865.publiccloud.com.br/jobs?job_skill_id%5B%5D=15">MySQL</a></li>
                            <li class="nav-item"><a class="btn btn-outline-dark m-2 nav-link" href="http://vps23865.publiccloud.com.br/jobs?job_skill_id%5B%5D=16">PHP</a></li>
                        </ul>
                        <hr>
                    </div>
                </div><!--end of card-->
            </div><!--end of col-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container">
                        <div class="row mx-auto justify-content-center">
                            <div class="col-7 py-4 pt-0">
                                <a href="http://trovacamporall.com" class="ratio img-responsive img-circle" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');"></a>
                            </div>
                        </div>
                    </div>
                    <h4 class="pt-3 pb-0 text-center text-dark">Coca-Cola</h4>
                    <p class="text-center">India</p>
                    <a href="#" class="card-title p-3 text-center text-dark">16 Current Jobs Openings</a>
                </div><!--card's end-->
                
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h4 class="pb-0 pt-1 text-dark">Job Detail</h4><hr>
                        <ul class="p-0 pt-2">
                            <li class="row justify-content-between">
                                <div class="col">Location</div>
                                <div class="col">
                                    <span>Brazil</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">Company</div>
                                <div class="col">
                                    <a href="http://vps23865.publiccloud.com.br/company/22" class="text-dark">Coca Cola</a>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">Career Level</div>
                                <div class="col"><span>Entry Level</span></div>
                            </li>
                            <li class="row">
                                <div class="col">Positions</div>
                                <div class="col"><span>5</span></div>
                            </li>
                        </ul>
                    </div>
                </div><!--card's end-->

                <div class="container p-0">
                    <button class="btn btn-primary btn-block py-3 mb-3">APPLY FOR THIS JOB</button>
                </div>

            </div><!--col end-->
            
        </div>
    </div>
    
</section>
@endsection