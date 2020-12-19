@extends('layouts.user')

@section('title-page')
<!-- Page Heading -->
<div class="container row justify-content-left py-3">
    <h1 class="h3 font-weight-bold text-dark">My Profile</h1>
</div>
@endsection  
                  
@section('content')

<div class="py-4">
    <div class="col-12">

        <nav>
            <div class="nav nav-tabs font-weight-bold" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Personal Information</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Summary</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a>
            </div>
        </nav>

        <div class="card h-100 shadow rounded-0">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">{{__('Personal Information')}}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body bg-white">

                        {{-- !! Form::model($user, array('method' => 'put', 'route' => array('my.profile'), 'class' => 'form', 'files'=>true)) !! --}}
                            
                            <div class="row py-3">
                                <div class="col-md-9">
                                    <div class="formrow"> {{-- ImgUploader::print_image("user_images/$user->image", 100, 100) --}} </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="formrow">
                                        <div id="thumbnail"></div>
                                        <label class="btn btn-primary btn-block"> {{__('Select Profile Image')}}
                                            <input type="file" name="image" id="image" style="display: none;">
                                        </label>
                                        {!! APFrmErrHelp::showErrors($errors, 'image') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'first_name') !!}">
                                        <label class="font-weight-bold text-dark">First Name</label>
                                        {!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name', 'placeholder'=>__('First Name'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'first_name') !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'middle_name') !!}">
                                        <label class="font-weight-bold text-dark">Middle Name</label>
                                        {!! Form::text('middle_name', null, array('class'=>'form-control', 'id'=>'middle_name', 'placeholder'=>__('Middle Name'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'middle_name') !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'last_name') !!}">
                                        <label class="font-weight-bold text-dark">Last Name</label>
                                        {!! Form::text('last_name', null, array('class'=>'form-control', 'id'=>'last_name', 'placeholder'=>__('Last Name'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'last_name') !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'father_name') !!}">
                                        <label class="font-weight-bold text-dark">Father Name</label>
                                        {!! Form::text('father_name', null, array('class'=>'form-control', 'id'=>'father_name', 'placeholder'=>__('Father Name'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'father_name') !!}
                                    </div>
                                </div>
                            </div><!--end-form-group-->

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'gender_id') !!}">
                                        {{-- !! Form::select('gender_id', [''=>__('Select Gender')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id')) !!--}}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'gender_id') !! --}}

                                        <label class="font-weight-bold text-dark">Gender</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option> Female</option>
                                            <option> Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
                                        <?php $country_id = old('country_id', (isset($user) && (int) $user->country_id > 0) ? $user->country_id : $siteSetting->default_country_id); ?>
                                        {{-- !! Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id, array('class'=>'form-control', 'id'=>'country_id')) !! --}}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'country_id') !! --}}

                                        <label class="font-weight-bold text-dark">Country</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select an country...</option>
                                            <option> etc</option>
                                            <option> etc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'state_id') !!}">
                                        <label class="font-weight-bold text-dark">State</label>
                                        <span id="state_dd">
                                            {!! Form::select('state_id', [''=>__('Select State')], null, array('class'=>'form-control', 'id'=>'state_id')) !!}
                                        </span>
                                        {!! APFrmErrHelp::showErrors($errors, 'state_id') !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
                                        <label class="font-weight-bold text-dark">City</label>
                                        <span id="city_dd">
                                            {!! Form::select('city_id', [''=>__('Select City')], null, array('class'=>'form-control', 'id'=>'city_id')) !!}
                                        </span>
                                        {!! APFrmErrHelp::showErrors($errors, 'city_id') !!}
                                    </div>
                                </div>
                            </div><!--end-form-group-->

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'nationality_id') !!}">
                                        {{-- !! Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null, array('class'=>'form-control', 'id'=>'nationality_id')) !!--}}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'nationality_id') !! --}}

                                        <label class="font-weight-bold text-dark">Nationality</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Nationality...</option>
                                            <option> etc</option>
                                            <option> etc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'date_of_birth') !!}">
                                        <label class="font-weight-bold text-dark">Date of Birth</label>
                                        {!! Form::text('date_of_birth', null, array('class'=>'form-control datepicker', 'id'=>'date_of_birth', 'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off')) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'date_of_birth') !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'phone') !!}"> 
                                    <label class="font-weight-bold text-dark">Phone</label>
                                        {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__('Phone'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'phone') !!} 
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'mobile_num') !!}">
                                        <label class="font-weight-bold text-dark">Mobile Number</label>
                                        {!! Form::text('mobile_num', null, array('class'=>'form-control', 'id'=>'mobile_num', 'placeholder'=>__('Mobile Number'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'mobile_num') !!}
                                    </div>
                                </div>
                            </div><!--end-form-group-->

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'job_experience_id') !!}"> 
                                        {{-- !! Form::select('job_experience_id', [''=>__('Select Experience')]+$jobExperiences, null, array('class'=>'form-control', 'id'=>'job_experience_id')) !! --}}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'job_experience_id') !! --}}

                                        <label class="font-weight-bold text-dark">Experience</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Experience...</option>
                                            <option> etc</option>
                                            <option> etc</option>
                                        </select>
                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'career_level_id') !!}"> 
                                        {{-- !! Form::select('career_level_id', [''=>__('Select Career Level')]+$careerLevels, null, array('class'=>'form-control', 'id'=>'career_level_id')) !! --}}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'career_level_id') !! --}}

                                        <label class="font-weight-bold text-dark">Career Level</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Career Level...</option>
                                            <option> etc</option>
                                            <option> etc</option>
                                        </select>
                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'industry_id') !!}"> 
                                        {{-- !! Form::select('industry_id', [''=>__('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id')) !! --}}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'industry_id') !! --}}

                                        <label class="font-weight-bold text-dark">Industry</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Industry...</option>
                                            <option> etc</option>
                                            <option> etc</option>
                                        </select>
                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-3">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'functional_area_id') !!}"> 
                                        {{-- !! Form::select('functional_area_id', [''=>__('Select Functional Area')]+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
                                        {{-- !! APFrmErrHelp::showErrors($errors, 'functional_area_id') !! --}}

                                        <label class="font-weight-bold text-dark">Functional Area</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Functional Area...</option>
                                            <option> etc</option>
                                            <option> etc</option>
                                        </select>
                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-12">
                                    <div class="{!! APFrmErrHelp::hasError($errors, 'street_address') !!}">
                                        <label class="font-weight-bold text-dark">Street Adress</label>
                                        {!! Form::textarea('street_address', null, array('class'=>'form-control', 'id'=>'street_address', 'placeholder'=>__('Street Address'))) !!}
                                        {!! APFrmErrHelp::showErrors($errors, 'street_address') !!}
                                    </div>
                                </div><!--end-form-group-->

                            </div><!--form-group ROW-->
                            <button type="submit" class="btn btn-primary font-weight-bold text-uppercase mt-4 py-2">Update Profile and Save</button>
                        {!! Form::close() !!}
                    </div><!--card-body-->
                </div><!--tab-pane-->

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">{{__('Summary')}}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body bg-white">

                        <!-- Herbet, voce pode usar este include ao invés de escrever o form aqui, só precisa chamar a variable
                        para esta blade. -->

                        {{-- @include('user.inc.summary') --}}

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form" id="add_edit_profile_summary" method="POST" action="{{-- route('update.front.profile.summary', [$user->id]) --}}">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <div id="success_msg"></div>
                                        <div class="formrow {{-- !! APFrmErrHelp::hasError($errors, 'summary') !! --}}">
                                            <textarea name="summary" class="form-control" id="summary" placeholder="{{__('Profile Summary')}}">{{-- old('summary', $user->getProfileSummary('summary')) --}}</textarea>
                                            <span class="help-block summary-error"></span>
                                        </div>
                                        <button type="button" class="btn btn-primary font-weight-bold text-uppercase mt-4 col-md-3 py-2" onClick="submitProfileSummaryForm();">{{__('Update Summary')}} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">{{__('Others')}}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body bg-white">
                        {{-- @include('user.project.projects') --}}
                        {{-- @include('user.experience.experience') --}}
                        {{-- @include('user.education.education') --}}
                        {{-- @include('user.language.languages') --}}
                        {{-- @include('user.skill.skills') --}}
                    </div>
                </div>

            </div><!--tab-content-->
        </div><!--card-->
    </div>
</div>
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush