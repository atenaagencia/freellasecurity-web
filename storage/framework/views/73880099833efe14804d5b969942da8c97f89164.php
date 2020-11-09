<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="<?php echo e((session('localeDir', 'ltr'))); ?>" dir="<?php echo e((session('localeDir', 'ltr'))); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(__($seo->seo_title)); ?></title>
        <meta name="Description" content="<?php echo $seo->seo_description; ?>">
        <meta name="Keywords" content="<?php echo $seo->seo_keywords; ?>">
        <?php echo $seo->seo_other; ?>

        <!-- Fav Icon -->
        <link rel="shortcut icon" href="<?php echo e(asset('/favicon.ico')); ?>">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" />
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand mr-0 mr-md-2" href="<?php echo e(asset('/teste')); ?>">
                    <img src="<?php echo e(asset('img/logos/main-logo.png')); ?>" alt="" width="auto" height="36">
                </a>
                <!-- <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><svg class="d-block" width="36" height="36" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false"><title>Bootstrap</title><path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path><path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path></svg></a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item"><a class="nav-link h5 mt-1" href="<?php echo e(asset('/teste/jobs')); ?>">Jobs</a></li>
                        <li class="nav-item"><a class="nav-link h5 mt-1" href="<?php echo e(asset('/teste/companies')); ?>">Companies</a></li>
                        <li class="nav-item"><a class="nav-link h5 mt-1" href="<?php echo e(asset('/contact-us')); ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link h5 mt-1 ml-lg-3 pl-lg-3 btn btn-primary text-light font-weight-bold" href="<?php echo e(asset('/login')); ?>">Sign In</a></li>
                    </ul>
                </div>          
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
        
        <div class="py-4 bg-light-custom p-5"> 
            <div class="container">
                <div class="row"> 
        
                    <!--Quick Links-->
                    <div class="col-md-3 col-sm-6 pr-4">
                        <h5 class="pl-0 pr-0 pb-3">Quick Links</h5>
                        <!--Quick Links menu Start-->
                        <ul class="p-0" id="footer">
                            <li><a href="http://vps23865.publiccloud.com.br">Home</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/contact-us">Contact Us</a></li>
                            <li class="postad"><a href="http://vps23865.publiccloud.com.br/post-job">Post a Job</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/faq">FAQs</a></li>                    
                            <li class=""><a href="http://vps23865.publiccloud.com.br/cms/terms-of-use">Terms Of Use</a></li>
                        </ul>
                    </div>
                    <!--Quick Links menu end-->
        
                    <div class="col-md-3 col-sm-6 pr-4">
                        <h5 class="pl-0 pr-0 pb-3">Jobs By Functional Area</h5>
                        <!--Quick Links menu Start-->
                        <ul class="p-0" id="footer">
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=16">Clerical</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=14">Business Management</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=8">Advertising</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=1">Accountant</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=32">Electronics Technician</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=18">Computer Hardware</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=6">Administration Clerical</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=15">Business Systems Analyst</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=19">Computer Networking</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                        </ul>
                    </div>
        
                    <!--Jobs By Industry-->
                    <div class="col-md-3 col-sm-6 pr-4">
                        <h5 class="pl-0 pr-0 pb-3">Jobs By Industry</h5>
                        <!--Industry menu Start-->
                        <ul class="p-0" id="footer">
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=28">Electronics</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=17">Construction/Cement/Metals</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=49">Consultants</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=7">Advertising/PR</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=38">Health &amp; Fitness</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=1">Information Technology</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=32">Fashion</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=24">Travel/Tourism/Transportation</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=10">Manufacturing</a></li>
                            <li><a href="http://vps23865.publiccloud.com.br/jobs?industry_id%5B%5D=13">Agriculture/Fertilizer/Pesticide</a></li>
                        </ul>
                        <!--Industry menu End-->
                        <div class="clear"></div>
                    </div>
        
                    <!--About Us-->
                    <div class="col-md-3 col-sm-12">
                        <h5 class="pl-0 pr-0 pb-3">Contact Us</h5>
                        <p class="font-weight-bold">Rua Prof. Aprígio Gonzaga 681, Saúde, São Paulo, SP, Brasil. CEP 04303-001</p>
                        <div class="font-weight-bold">
                            <a href="mailto:support@jobsportal.com" class="text-dark">support@jobsportal.com</a>
                        </div>
                        <div class="font-weight-bold">
                            <a href="tel:+92 12 1234567" class="text-dark">+92 12 1234567</a>
                        </div>
                        <!-- Social Icons -->
                        <div class="py-3">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-google-plus-square" aria-hidden="true"></i></a>
                            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-2x text-dark m-1 fa-twitter-square" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://linkedin.com/" target="_blank"><i class="fab fa-2x text-dark m-1 fa-linkedin" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-2x text-dark m-1 fa-youtube-square" aria-hidden="true"></i></a>
                        </div>
                        <!-- Social Icons end --> 
        
                    </div>
                    <!--About us End--> 
        
                </div>
            </div>
            
        </div>

        
        <!-- Footer-->
        <footer class="footer bg-light-custom py-4">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 text-lg-left">Copyright © Freellas Security 2020</div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3 text-dark" href="#!">Privacy Policy</a>
                        <a href="#!" class="text-dark">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo e(asset('mail/jqBootstrapValidation.js')); ?>"></script>
        <script src="<?php echo e(asset('mail/contact_me.js')); ?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('js/custom-scripts.js')); ?>"></script>

        <script>
            CKEDITOR.replace('summary-ckeditor',
                {
                    entities: false,
                    basicEntities: false,
                    entities_greek: false,
                    entities_latin: false,
                });
        </script>
        
        <script src="https://www.google.com/recaptcha/api.js?" async="" defer=""></script>

        <script>
            let pusher = new Pusher('a28b149bfa9cd891c76e', {
                cluster: 'ap2',
                encrypted: true
            });
            //Also remember to change channel and event name if your's are different.
            let channel = pusher.subscribe('employer');
            channel.bind('employer-notification', function (employerNotification) {
                console.log(employerNotification.content);
                console.log(employerNotification.notificationId);
                let dropdown_menu = $('#dropdown-menu');
                dropdown_menu.prepend('<li class="notification"><a href="http://vps23865.publiccloud.com.br/job' + '/' + employerNotification.jobSlug + '">' + employerNotification.content + '</li>');
            });
        </script>

        <script>
            $(document).ready(function ($) {
                $("form").submit(function () {
                    $(this).find(":input").filter(function () {
                        return !this.value;
                    }).attr("disabled", "disabled");
                    return true;
                });
                $("form").find(":input").prop("disabled", false);
        
                $(".view_more_ul").each(function () {
                    if ($(this).height() > 100)
                    {
                        $(this).addClass('hide_vm_ul');
                        $(this).next().removeClass('hide_vm');
                    }
                });
                $('.view_more').on('click', function (e) {
                    e.preventDefault();
                    $(this).prev().removeClass('hide_vm_ul');
                    $(this).addClass('hide_vm');
                });
        
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function ($) {
            $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterStates(0);
            });
            $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterCities(0);
            });
                        filterStates(0);
            });
            function filterStates(state_id)
            {
            var country_id = $('#country_id').val();
            if (country_id != ''){
            $.post("http://vps23865.publiccloud.com.br/filter-states-dropdown", {country_id: country_id, state_id: state_id, _method: 'POST', _token: 'VpALzkJ1BqMza2EquDKmV5kjmVNBOff8Agl0h8CE'})
                    .done(function (response) {
                    $('#state_dd').html(response);
                                        filterCities(0);
                    });
            }
            }
            function filterCities(city_id)
            {
            var state_id = $('#state_id').val();
            if (state_id != ''){
            $.post("http://vps23865.publiccloud.com.br/filter-cities-dropdown", {state_id: state_id, city_id: city_id, _method: 'POST', _token: 'VpALzkJ1BqMza2EquDKmV5kjmVNBOff8Agl0h8CE'})
                    .done(function (response) {
                    $('#city_dd').html(response);
                    });
            }
            }
        </script>

        <script src="http://vps23865.publiccloud.com.br/js/script.js"></script>

        <script type="text/JavaScript">
            $(document).ready(function(){
                $('#startdate').datepicker();
                $('#enddate').datepicker();
                $('#whichdate').datepicker("setDate", new Date());
    
                $(document).scrollTo('.has-error', 2000);
                });
                function showProcessingForm(btn_id){
                $("#"+btn_id).val( 'Processing .....' );
                $("#"+btn_id).attr('disabled','disabled');
            }
    
            function readmore(milestoneId) {
                 var dots = document.getElementById("dots_"+milestoneId);
                 var moreText = document.getElementById("moredescription_"+milestoneId);
                 var btnText = document.getElementById("readmorebtn_"+milestoneId);
    
                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
    
            function Submitmilestone(milestoneId) {
                $('.submitmilestoneId').val(milestoneId);
                $('#Submitmilestonemodal').modal('show');
            }
    
            function getClientJobslist(clientId) {
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                $.ajax({
                method: 'POST',
                url: 'http://vps23865.publiccloud.com.br/hired-client-jobs',
                data: {'clientId' : clientId},
                success: function(response){
                    $('#jobsofclient').html('');
                    if(response!=0){
                       var response = JSON.parse(response);
                       $('#jobsofclient').html('<option>Select Job</option>');
                       $.each(response, function(index, value){
                            $('#jobsofclient').append('<option value="'+value.id+'">'+value.title+'</option>');
                        });
                    } else {
                         $('#jobsofclient').html('<option>No Jobs found</option>');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
            }
    
            function getMilestonesList(jobId){
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                $.ajax({
                method: 'POST',
                url: 'http://vps23865.publiccloud.com.br/single-job-milestone-list',
                data: {'jobId' : jobId},
                success: function(response){
                        $('#milestonesofclient').html('');
                    if(response!=0){
                        response = JSON.parse(response);
                        var i= 0 ;
                        $.each(response, function(index, value){
                            i = parseInt(i) + parseInt(1);
                            $('#milestonesofclient').append('<option value="'+value.id+'">'+value.milestone_title+'</option>');
                        });
                    } else {
                        $('#milestonesofclient').html('<option value="">No milestones found</option>');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
              });
            }
    
            function verifywork(milestoneId) {
    
                $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                $.ajax({
                method: 'POST',
                url: 'http://vps23865.publiccloud.com.br/verify-milestone-work',
                data: {'milestoneId' : milestoneId},
                success: function(response){
                    var response = JSON.parse(response);
                    if(response[0].submit_message!=null){
                        var submit_message = response[0].submit_message;
                    } else {
                        var submit_message = 'No details found!!!';
                    }
    
                    var milestoneId = response[0].id;
    
                    $('.display_submit_message').text(submit_message);
                    $('.completemilestoneId').val(milestoneId);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
    
                $('#verifyworkmodal').modal('show');
            }
    
            function changeTimesheetStatus(status, timesheetId) {
                $('.timesheetid').val(timesheetId);
                $('.changedstatusvalue').val(status);
                $('#changetimesheetstatusmodal').modal('show');
            }
    
            function deleteMilestone(milestoneId) {
                $('.deleteMilestoneId').val(milestoneId);
                $('#deleteMilestoneModal').modal('show');
            }
    
            ///////////////////////////////////////////////////////////////////////////////////////////////
            //Begin : For Web based notification with pusher
            ///////////////////////////////////////////////////////////////////////////////////////////////
            var notificationsWrapper = $('.dropdown-notifications');
            var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
            var notificationsCountElem = notificationsToggle.find('i[data-count]');
            var notificationsCount = parseInt(notificationsCountElem.data('count'));
            var notifications = notificationsWrapper.find('ul.dropdown-menu');
            /*if (notificationsCount <= 0) {
                notificationsWrapper.hide();
            }*/
            var notifypusher = new Pusher('d0c7990bbda7deb1300c', {
                cluster: 'ap2',
                encrypted: false
            });
            // Subscribe to the channel we specified in our Laravel Event
            var notifyChannel = notifypusher.subscribe('job-apply-event');
            console.log("notifications testing");
            // Bind a function to a Event (the full Laravel class)
            notifyChannel.bind('App\\Events\\JobApplyEvent', function(data) {
                console.log("in"); console.log(data); console.log("#");
                var existingNotifications = notifications.html();
                var custom_link = window.location.origin+`/view-public-profile/`+data.send_user_id;
                var profile_link = '';
                if(data.send_user_profile_pic != 0 ){
                    profile_link = window.location.origin+`/user_images/`+data.send_user_profile_pic;
                }else{
                    profile_link = ``;
                }
                var newNotificationHtml = `
                    <li class="notification active">
                        <div class="media" onclick="`+custom_link+`" style="cursor:pointer;">
                          <div class="media-left">
                            <div class="media-object">
                              <img src="`+profile_link+`" class="img-circle" alt="image" style="width: 50px; height: 50px;">
                            </div>
                          </div>
                          <div class="media-body">
                            <strong class="notification-title">` + data.message + `</strong>
                            <div class="notification-meta">
                              <small class="timestamp">about a minute ago</small>
                            </div>
                          </div>
                        </div>
                    </li>
                  `;
                  notifications.html(newNotificationHtml + existingNotifications);
                  notificationsCount += 1;
                  notificationsCountElem.attr('data-count', notificationsCount);
                  notificationsWrapper.find('.notif-count').text(notificationsCount);
                  notificationsWrapper.show();
              });
    
                /*if(notification_user_id !='' && notification_msg!=''){
                    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                    $.ajax({
                        method: 'POST',
                        url: 'http://vps23865.publiccloud.com.br/submit-notifications-details',
                        data: {'user_id' : notification_user_id, 'message' : notification_msg}, 
                        success: function(response){ 
                            console.log(response);  
                            //alert(response);  
                        },
                        error: function(jqXHR, textStatus, errorThrown) { 
                            console.log(JSON.stringify(jqXHR));
                            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                        }
                    });
                }*/
            ///////////////////////////////////////////////////////////////////////////////////////////////
            //End : For Web based notification with pusher
            ///////////////////////////////////////////////////////////////////////////////////////////////
        </script>
    </body>
</html>