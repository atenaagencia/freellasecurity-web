<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="{{ (session('localeDir', 'ltr'))}}" dir="{{ (session('localeDir', 'ltr'))}}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{__($seo->seo_title) }}</title>
        <meta name="Description" content="{!! $seo->seo_description !!}">
        <meta name="Keywords" content="{!! $seo->seo_keywords !!}">
        {!! $seo->seo_other !!}
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
  
        <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #292828; !important">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <!-- <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div> -->
                    <div class="sidebar-brand-text mx-3">
                        <img src="{{asset('img/logos/logo_two.png')}}" alt="" width="auto" height="30">
                    </div>
                </a>

                <!-- Sidebar Message -->
                <div class="sidebar-card">
                    <div class="custom-control custom-switch">
                        @php
                        $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';
                        @endphp
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="is_immediate_available" {{$checked}} onchange="changeImmediateAvailableStatus({{Auth::user()->id}}, {{Auth::user()->is_immediate_available}});">
                        <label class="custom-control-label" for="customSwitch1"><strong>Imediate Avaliable</strong><i data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('Are you immediate available')}}?" data-original-title="{{__('Are you immediate available')}}?" title="{{__('Are you immediate available')}}?"></i></label>
                    </div>
                </div>

                <!-- <div class="switchbox">
                    <div class="txtlbl">{{__('Immediate Available')}} <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('Are you immediate available')}}?" data-original-title="{{__('Are you immediate available')}}?" title="{{__('Are you immediate available')}}?"></i></div>
                    <div class="float-right">
                        <label class="switch switch-green">
                            @php
                            $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';
                            @endphp
                            <input type="checkbox" name="is_immediate_available" id="is_immediate_available" class="switch-input" {{$checked}} onchange="changeImmediateAvailableStatus({{Auth::user()->id}}, {{Auth::user()->is_immediate_available}});">
                            <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </div> -->

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Jobs
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('my.job.applications') }}" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>My Job Applications</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my.favourite.jobs') }}">
                        <i class="fas fa-fw fa-heart"></i>
                        <span>My Favourite Jobs</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs.developmentstatus') }}">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Development Status</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my.payment_management') }}">
                        <i class="fab fa-paypal"></i>
                        <span>Payment Management</span>
                    </a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>My Chats</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle">
                        <i class="fa fa-arrow-left text-light"></i>
                    </button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="{{asset('/jobs')}}" role="button">Jobs</a>
                            </li>

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="{{asset('/companies')}}" role="button">Companies</a>
                            </li>

                            <li class="nav-item dropdown mx-1">
                                <a class="nav-link text-dark font-weight-bold" href="{{asset('/contact-us')}}" role="button">Contact Us</a>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">0</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lorem Ipsum</span>
                                    <img class="img-profile rounded-circle" src="https://via.placeholder.com/150x150">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{__('Logout')}}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        @yield('title-page')

                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
                
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <script src="{{asset('js/sb-admin-2.js')}}"></script>

        <!-- Contact form JS-->
        <script src="{{asset('mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/custom-scripts.js')}}"></script>

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

        </script>
    </body>
</html>