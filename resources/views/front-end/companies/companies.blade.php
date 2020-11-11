@extends('layouts.custom')
<style>
@media (min-width: 600px) {
    .img-fluid{
        max-height: 240px !important;
    }
}
</style>
@section('content')
<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Companies List</h1>
    </div>
</header>

<!-- Feature Jobs-->
<section class="page-section bg-secondary-custom">
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/company')}}">
                        <img class="img-fluid" src="https://images.pexels.com/photos/442154/pexels-photo-442154.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-muted">Your Location Address USA</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">Current jobs : 1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/company')}}">
                        <img class="img-fluid" src="https://images.pexels.com/photos/3912373/pexels-photo-3912373.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-muted">Your Location Address USA</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">Current jobs : 1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/company')}}">
                        <img class="img-fluid" src="https://images.pexels.com/photos/3825581/pexels-photo-3825581.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-muted">Your Location Address USA</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">Current jobs : 1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/company')}}">
                        <img class="img-fluid" src="{{asset('admin_assets/no-image.png')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-muted">Your Location Address USA</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">Current jobs : 1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/company')}}">
                        <img class="img-fluid" src="{{asset('admin_assets/no-image.png')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-muted">Your Location Address USA</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">Current jobs : 1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{asset('/teste/company')}}">
                        <img class="img-fluid" src="{{asset('admin_assets/no-image.png')}}" alt="" />
                    </a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">Electrical Engineer</div>
                        <div class="portfolio-caption-subheading text-left text-muted">Your Location Address USA</div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">Current jobs : 1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pagination-->
        <div class="row justify-content-between py-4">
            <div class="col-md-5">
                <div class="showreslt">
                    Showing Pages : 11 - 20 Total 43
                </div>
            </div>
            <div class="col-md-7">
                <ul class="pagination float-right">
                    <li class="page-item"><a class="page-link" href="http://vps23865.publiccloud.com.br/jobs?page=1" rel="prev">«</a></li>
                    <li class="page-item"><a class="page-link" href="http://vps23865.publiccloud.com.br/jobs?page=1">1</a></li>
                    <li class="page-item active"><span class="page-link">2</span></li>
                    <li class="page-item"><a class="page-link" href="http://vps23865.publiccloud.com.br/jobs?page=3">3</a></li>
                    <li class="page-item"><a class="page-link" href="http://vps23865.publiccloud.com.br/jobs?page=4">4</a></li>
                    <li class="page-item"><a class="page-link" href="http://vps23865.publiccloud.com.br/jobs?page=5">5</a></li>     
                    <li class="page-item"><a class="page-link" href="http://vps23865.publiccloud.com.br/jobs?page=3" rel="next">»</a></li>
                </ul>
            </div>
        </div><!--end of pagination-->
    </div><!--row-->
</section>
@endsection