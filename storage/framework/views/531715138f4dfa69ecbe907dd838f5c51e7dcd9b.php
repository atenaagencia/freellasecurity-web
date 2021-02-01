<?php $__env->startSection('title-page'); ?>
<!-- Page Heading -->
<div class="container row justify-content-left py-3">
    <h1 class="h3 font-weight-bold text-dark">My Profile</h1>
</div>
<?php $__env->stopSection(); ?>  
                  
<?php $__env->startSection('content'); ?>

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
                        <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Personal Information')); ?></h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body bg-white">

                        <?php echo e(Form::model($user, array('method' => 'put', 'route' => array('my.profile'), 'class' => 'form', 'files'=>true))); ?>

                            
                            <div class="row py-3">
                                <div class="col-md-9">
                                    <div class="formrow"> <?php echo e(ImgUploader::print_image("user_images/$user->image", 100, 100)); ?> </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="formrow">
                                        <div id="thumbnail"></div>
                                        <label class="btn btn-primary btn-block"> <?php echo e(__('Select Profile Image')); ?>

                                            <input type="file" name="image" id="image" style="display: none;">
                                        </label>
                                        <?php echo APFrmErrHelp::showErrors($errors, 'image'); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'first_name'); ?>">
                                        <label class="font-weight-bold text-dark">First Name</label>
                                        <?php echo Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name', 'placeholder'=>__('First Name'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'first_name'); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'middle_name'); ?>">
                                        <label class="font-weight-bold text-dark">Middle Name</label>
                                        <?php echo Form::text('middle_name', null, array('class'=>'form-control', 'id'=>'middle_name', 'placeholder'=>__('Middle Name'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'middle_name'); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'last_name'); ?>">
                                        <label class="font-weight-bold text-dark">Last Name</label>
                                        <?php echo Form::text('last_name', null, array('class'=>'form-control', 'id'=>'last_name', 'placeholder'=>__('Last Name'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'last_name'); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'father_name'); ?>">
                                        <label class="font-weight-bold text-dark">Father Name</label>
                                        <?php echo Form::text('father_name', null, array('class'=>'form-control', 'id'=>'father_name', 'placeholder'=>__('Father Name'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'father_name'); ?>

                                    </div>
                                </div>
                            </div><!--end-form-group-->

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'gender_id'); ?>">
                                       
                                        <?php echo e(APFrmErrHelp::showErrors($errors, 'gender_id')); ?>


                                        <label class="font-weight-bold text-dark">Gender</label>
                                     <?php echo e(Form::select('gender_id', [''=>__('Select Gender')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id'))); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'country_id'); ?>">
                                        <?php $country_id = old('country_id', (isset($user) && (int) $user->country_id > 0) ? $user->country_id : $siteSetting->default_country_id); ?>                                     

                                        <label class="font-weight-bold text-dark">Country</label>
                                        <?php echo e(Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id, array('class'=>'form-control', 'id'=>'country_id'))); ?>

                                        <?php echo e(APFrmErrHelp::showErrors($errors, 'country_id')); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'state_id'); ?>">
                                        <label class="font-weight-bold text-dark">State</label>
                                        <span id="state_dd">
                                            <?php echo Form::select('state_id', [''=>__('Select State')], null, array('class'=>'form-control', 'id'=>'state_id')); ?>

                                        </span>
                                        <?php echo APFrmErrHelp::showErrors($errors, 'state_id'); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'city_id'); ?>">
                                        <label class="font-weight-bold text-dark">City</label>
                                        <span id="city_dd">
                                            <?php echo Form::select('city_id', [''=>__('Select City')], null, array('class'=>'form-control', 'id'=>'city_id')); ?>

                                        </span>
                                        <?php echo APFrmErrHelp::showErrors($errors, 'city_id'); ?>

                                    </div>
                                </div>
                            </div><!--end-form-group-->

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'nationality_id'); ?>">
                                        <label class="font-weight-bold text-dark">Nationality</label>
                                     <?php echo e(Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null, array('class'=>'form-control', 'id'=>'nationality_id'))); ?>

                                    <?php echo e(APFrmErrHelp::showErrors($errors, 'nationality_id')); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'date_of_birth'); ?>">
                                        <label class="font-weight-bold text-dark">Date of Birth</label>
                                        <?php echo Form::text('date_of_birth', null, array('class'=>'form-control datepicker', 'id'=>'date_of_birth', 'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off')); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'date_of_birth'); ?>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'phone'); ?>"> 
                                    <label class="font-weight-bold text-dark">Phone</label>
                                        <?php echo Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__('Phone'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'phone'); ?> 
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'mobile_num'); ?>">
                                        <label class="font-weight-bold text-dark">Mobile Number</label>
                                        <?php echo Form::text('mobile_num', null, array('class'=>'form-control', 'id'=>'mobile_num', 'placeholder'=>__('Mobile Number'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'mobile_num'); ?>

                                    </div>
                                </div>
                            </div><!--end-form-group-->

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'job_experience_id'); ?>"> 
                                        
                                        <label class="font-weight-bold text-dark">Experience</label>
                                       <?php echo e(Form::select('job_experience_id', [''=>__('Select Experience')]+$jobExperiences, null, array('class'=>'form-control', 'id'=>'job_experience_id'))); ?>

                                        <?php echo e(APFrmErrHelp::showErrors($errors, 'job_experience_id')); ?>

                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'career_level_id'); ?>"> 
                                      

                                        <label class="font-weight-bold text-dark">Career Level</label>
                                     <?php echo e(Form::select('career_level_id', [''=>__('Select Career Level')]+$careerLevels, null, array('class'=>'form-control', 'id'=>'career_level_id'))); ?>

                                    <?php echo e(APFrmErrHelp::showErrors($errors, 'career_level_id')); ?>

                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'industry_id'); ?>"> 
                                       <label class="font-weight-bold text-dark">Industry</label>
                                        <?php echo e(Form::select('industry_id', [''=>__('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id'))); ?>

                                        <?php echo e(APFrmErrHelp::showErrors($errors, 'industry_id')); ?>


                                        
                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-3">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'functional_area_id'); ?>"> 
                                        <label class="font-weight-bold text-dark">Functional Area</label>
                                        <?php echo e(Form::select('functional_area_id', [''=>__('Select Functional Area')]+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id'))); ?>

                                        <?php echo e(APFrmErrHelp::showErrors($errors, 'functional_area_id')); ?>


                                      
                                      
                                    </div>
                                </div><!--end-form-group-->

                                <div class="form-group col-md-12">
                                    <div class="<?php echo APFrmErrHelp::hasError($errors, 'street_address'); ?>">
                                        <label class="font-weight-bold text-dark">Street Adress</label>
                                        <?php echo Form::textarea('street_address', null, array('class'=>'form-control', 'id'=>'street_address', 'placeholder'=>__('Street Address'))); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'street_address'); ?>

                                    </div>
                                </div><!--end-form-group-->

                            </div><!--form-group ROW-->
                            <button type="submit" class="btn btn-primary font-weight-bold text-uppercase mt-4 py-2">Update Profile and Save</button>
                        <?php echo Form::close(); ?>

                    </div><!--card-body-->
                </div><!--tab-pane-->

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Summary')); ?></h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body bg-white">

                        <!-- Herbet, voce pode usar este include ao invés de escrever o form aqui, só precisa chamar a variable
                        para esta blade. -->

                        

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form" id="add_edit_profile_summary" method="POST" action="<?php echo e(route('update.front.profile.summary', [$user->id])); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-body">
                                        <div id="success_msg"></div>
                                        <div class="formrow ">
                                            <textarea name="summary" class="form-control" id="summary" placeholder="<?php echo e(__('Profile Summary')); ?>"></textarea>
                                            <span class="help-block summary-error"></span>
                                        </div>
                                        <button type="button" class="btn btn-primary font-weight-bold text-uppercase mt-4 col-md-3 py-2" onClick="submitProfileSummaryForm();"><?php echo e(__('Update Summary')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Others')); ?></h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body bg-white">
                        
                    </div>
                </div>

            </div><!--tab-content-->
        </div><!--card-->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
    $(document).ready(function () {
        initdatepicker();
        $('#salary_currency').typeahead({
            source: function (query, process) {
                return $.get("<?php echo e(route('typeahead.currency_codes')); ?>", {query: query}, function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    return process(data);
                });
            }
        });

        $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterStates(0);
        });
        $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterCities(0);
        });
        filterStates(<?php echo old('state_id', $user->state_id); ?>);

        /*******************************/
        var fileInput = document.getElementById("image");
        fileInput.addEventListener("change", function (e) {
            var files = this.files
            showThumbnail(files)
        }, false)
        function showThumbnail(files) {
            $('#thumbnail').html('');
            for (var i = 0; i < files.length; i++) {
                var file = files[i]
                var imageType = /image.*/
                if (!file.type.match(imageType)) {
                    console.log("Not an Image");
                    continue;
                }
                var reader = new FileReader()
                reader.onload = (function (theFile) {
                    return function (e) {
                        $('#thumbnail').append('<div class="fileattached"><img height="100px" src="' + e.target.result + '" > <div>' + theFile.name + '</div><div class="clearfix"></div></div>');
                    };
                }(file))
                var ret = reader.readAsDataURL(file);
            }
        }
    });

    function filterStates(state_id)
    {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("<?php echo e(route('filter.lang.states.dropdown')); ?>", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '<?php echo e(csrf_token()); ?>'})
                    .done(function (response) {
                        $('#state_dd').html(response);
                        filterCities(<?php echo old('city_id', $user->city_id); ?>);
                    });
        }
    }
    function filterCities(city_id)
    {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("<?php echo e(route('filter.lang.cities.dropdown')); ?>", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '<?php echo e(csrf_token()); ?>'})
                    .done(function (response) {
                        $('#city_dd').html(response);
                    });
        }
    }
    function initdatepicker() {
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'yyyy-m-d'
        });
    }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>