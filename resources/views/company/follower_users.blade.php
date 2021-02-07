@extends('layouts.company')

@section('content')
<!-- @include('includes.inner_page_title', ['page_title'=>__('Company Posted Jobs')]) -->
@section('title-page')
<h1 class="h3 py-4 font-weight-bold text-dark">{{__('Company Followers')}}</h1>
@endsection

<div class="row mx-auto mb-5">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">{{__('Company Followers')}}</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">

                <ul class="searchList p-0">
                    
                    <li class="nav-link pb-3">
                        <div class="row">
                            <div class="col">
                                <div class="container p-0">
                                    <img src="http://localhost:8000/admin_assets/no-image.png" style="width: 200px" alt="user_photo"  title="user_photo">
                                </div>
                                <div class="jobinfo">
                                    <div class="userName">
                                        <a href="#" alt="user_name"  title="user_name" class="badge badge-primary">UserName</a>
                                    </div>
                                    <div class="location">
                                        <label class="fulltime" alt="user_location"  title="user_location">Location</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="pb-3 font-weight-bold text-dark">Summary</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda nobis delectus atque inventore, sed id repudiandae commodi. 
                                Architecto aliquid repudiandae enim molestiae sapiente, dolores facilis nemo reprehenderit corrupti blanditiis. At.</p>
                                <a href="" class="btn btn-primary">See more</a>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <!-- job end -->                   
                </ul>                
            </div>
        </div>
    </div>
</div>
@endsection