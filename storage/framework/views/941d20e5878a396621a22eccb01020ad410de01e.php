<?php $__env->startSection('content'); ?> 
<!-- Header start --> 
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Header end --> 
<!-- Inner Page Title start --> 
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Company Messages')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <!-- <div class="row pull-right">
          <div class="col-lg-12">
              <div class="dropdown leftBarLinks">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="<?php echo e(route('company.home')); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> <?php echo e(__('Dashboard')); ?></a></li>
                    <li><a href="<?php echo e(route('company.profile')); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('Edit Profile')); ?></a></li>
                    <li><a href="<?php echo e(route('company.detail', Auth::guard('company')->user()->slug)); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('View Profile')); ?></a></li>
                    <li><a href="<?php echo e(route('post.job')); ?>"><i class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(__('Post Job')); ?></a></li>
                    <li><a href="<?php echo e(route('posted.jobs')); ?>"><i class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(__('All Jobs')); ?></a></li>
                    Below line is added by Hetal(line no : 9)
                    <li><a href="<?php echo e(route('jobs.development.status')); ?>"><i class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(__('Development Status')); ?></a></li>
                    
                    <li><a href="<?php echo e(route('company.messages')); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo e(__('Messages')); ?></a></li>
                   
                   <li><a href="<?php echo e(route('companychats.messages')); ?>"><i class="fa fa-comments" aria-hidden="true"></i> <?php echo e(__('Chat Messages')); ?></a></li>
                    <li><a href="<?php echo e(route('company.followers')); ?>"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo e(__('Company Followers')); ?></a></li>
                    <li><a href="<?php echo e(route('company.logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo e(__('Logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('company.logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>
                    </li>
                  </ul>
              </div>
            </div>
          </div> -->

  <div class="row"> 
      <div class="col-md-12 col-sm-12">
      <div class="myads message-body"> 
        <div class="row">
          <div class="col-md-3">
            <h5>
              <input type="search" class="form-control search" name="search" id="search" placeholder="search...">
            </h5>
                    <div class="user-wrapper">
                      <?php echo csrf_field(); ?>
                        <ul class="users">
                         <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($user[0]['jobDetails']): ?>
                            <?php $__currentLoopData = $user[0]['jobDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li class="user <?php echo e($jobs->id); ?>-<?php echo e($user[0]->id); ?>" job-id="<?php echo e($jobs->id); ?>" id="<?php echo e($user[0]->id); ?>">
                            <?php if($jobs->unread && $jobs->unread>0): ?>
                                <span class="pending"><?php echo e($jobs->unread); ?></span>
                            <?php endif; ?>
                                <div class="media">
                                    <div class="media-left">
                                    <?php if($user[0]->image!=""): ?>  
                                        <img src="<?php echo e(asset('user_images/'.$user[0]->image)); ?>" alt="" class="media-object">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('user_images/default_logo.png')); ?>" alt="" class="media-object">
                                    <?php endif; ?>    
                                    </div>

                                    <div class="media-body chatnames">
                                        <p class="name"><?php echo e($user[0]->name); ?></p>
                                        <p class="name"><?php echo e($jobs->title); ?></p>
                                        <p class="email"><?php echo e($user[0]->email); ?></p>
                                    </div>
                                </div>
                            </li>
                            <hr style="margin-top:1px; margin-bottom: 1px;border: 1px solid lightgray;">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php else: ?>
                            <li class="user" id="<?php echo e($user[0]->id); ?>">
                            <?php if($user[0]->unread && $user[0]->unread>0): ?>
                                <span class="pending"><?php echo e($user[0]->unread); ?></span>
                            <?php endif; ?>
                                <div class="media">
                                    <div class="media-left">
                                    <?php if($user[0]->image!=""): ?>  
                                        <img src="<?php echo e(asset('user_images/'.$user[0]->image)); ?>" alt="" class="media-object">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('user_images/default_logo.png')); ?>" alt="" class="media-object">
                                    <?php endif; ?>    
                                    </div>

                                    <div class="media-body">
                                        <p class="name"><?php echo e($user[0]->name); ?></p>
                                        <p class="email"><?php echo e($user[0]->email); ?></p>
                                    </div>
                                </div>
                            </li>
                        <hr style="margin-top:2px; margin-bottom: 2px;border: 1px solid lightgray;">
                        <?php endif; ?>    
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                        </ul>
                    </div>
                </div>

                <div class="col-md-9" id="messages">
                    
                </div>
        </div>
      </div>
     </div>
        </div>
    </div>
</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<script type="text/javascript">

  $(document).on("submit","#upload_form",function(e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: "<?php echo e(route('post-companyfileupload')); ?>",
        data: new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(res) {
            $('#message').css('display', 'block');
            $('#message').html(res.message);
            $('#message').addClass(res.class_name);
        }
    });
  });

  $(document).on("submit","#deleteconfirmation_form",function(e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: "<?php echo e(route('deletecompanyfile-post')); ?>",
        data: new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(res) {
            alert(res);
        }
    });
  });

  $(document).on("keyup","#search",function(e) {
      var search = $(this).val();
      if(search!=""){
          $(".users > li").each(function() {
          if ($(this).text().toLowerCase().indexOf(search.toLowerCase()) > -1) {
              $(this).show();
          }
          else { $(this).hide(); }
       });
      } else {
        $(".users > li").each(function() { $(this).show(); });
      }
  });

  function GetFileDetails(messageId) {
    $('#deletemessageId').val(messageId);
  }

  var receiver_id = '';
  var my_id = "<?php echo e(Auth::guard('company')->user()->id); ?>";

    $(document).ready(function() {
        var base_url = "<?php echo e(env('APP_URL')); ?>";
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('a28b149bfa9cd891c76e', {
          cluster: 'ap2',
          encrypted: false,
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
          if(my_id==data.from && job_id==data.job_id){
              $("#uploadfilemodal .closemodal").click();
              $("#deleteConfirmationModal .closemodal").click();
              appendNewmessage(receiver_id, job_id);
              // $('#'+ data.to).click();
          } else if(my_id==data.to){
              if(receiver_id==data.from && data.job_id==job_id){
                  // If receiver is selected reload the chat messages
                  appendNewmessage(receiver_id, job_id);
                  // $('#' + data.from).click();
              } else { // else add notification messages
              	var pending = parseInt($('.'+ data.job_id+'-'+data.from).find('.pending').html());

                if(pending){
                  $('.'+ data.job_id+'-'+data.from).find('.pending').html(pending + 1);
                } else {
                	$('.'+ data.job_id+'-'+data.from).append('<span class="pending">1</span>');
                }
            
              }
          }
        });

        function appendNewmessage(to, job_id) {
            var from = "<?php echo e(Auth::guard('company')->user()->id); ?>";
            var sender_name =  "<?php echo e(Auth::guard('company')->user()->name); ?>";
            var sender_logo = "<?php echo e(Auth::guard('company')->user()->logo); ?>";

            $.ajax({
              type: 'post',
              url: "<?php echo e(route('get-user-last-message')); ?>",
              data: { '_token': $('input[name=_token]').val(),
                      'receiver_id' : to, 'job_id': job_id },
              success: function(res) {
                  
                  var res = JSON.parse(res);
                  if(res.from == from){
                      var messageclass = "messagesent";
                  } else {
                      var messageclass = "messagereceived";
                  }

                  var html = '';
                 
                  if(res.from==from)
                  {
                  	if(sender_logo==''){
                      html+= '<img src="<?php echo e(asset('/company_logos/default_logo.png')); ?>" class="emp_img"><div class="can_name">'+sender_name+'</div>';
                  	} else {
                  		html+= '<img src="<?php echo e(asset('/company_logos/'.Auth::guard('company')->user()->logo)); ?>" class="emp_img"><div class="can_name">'+sender_name+'</div>';
                  	}
                  }
                  else{
                  		if(res.image==null || res.image==''){
                  		  html+='<p class="emp_name">'+res.name+'</p>'+
                              '<img src="'+base_url+'/company_logos/default_logo.png" class="emp_default_img">';
                  		} else {
                  		  html+='<p class="emp_name">'+res.name+'</p>'+
                              '<img src="'+base_url+'/user_images/'+res.image+'" class="emp_default_img">';
                  		}
                                                      
                     }

                 
                  html+='<li class="message clearfix"><div class="'+messageclass+'">';
                  if(res.message_type==0){
                      html+='<p class="textmessage">'+res.message+'</p>'; 
                  } 

                  if(res.message_type==1){
                      var downloadLink = "<?php echo e(asset('images/chats/')); ?>/"+res.message; 
                      html+='<span class="fa fa-paperclip attached"></span>'+
                             '<p><a href='+downloadLink+' download>'+res.original_name+'</a></p>';
                      html+='<p class="pull-right downloadIcon"><a href="'+downloadLink+'" download><span class="glyphicon glyphicon-download"></span></a></p>';
                  } 

                  if(res.message_type==2){
                      var downloadLink = "<?php echo e(asset('images/chats/')); ?>/"+res.message; 
                      html+='<span class="fa fa-paperclip attached"></span><p><a href="'+downloadLink+'" download><img src="'+downloadLink+'" height="200px" width="220px"></a>'+
                          '</p>';

                     html+='<p class="pull-right downloadIcon"><a href="'+downloadLink+'" download><span class="glyphicon glyphicon-download"></span></a></p>';
                  } 
                  
                  var createdAt = new Date(res.created_at);
                  var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                  "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"][createdAt.getMonth()];

                  var hours = createdAt.getHours();
                  var minutes = createdAt.getMinutes();
                  var ampm = hours >= 12 ? 'pm' : 'am';
                  hours = hours % 12;
                  hours = hours ? hours : 12; // the hour '0' should be '12'
                  minutes = minutes < 10 ? '0'+minutes : minutes;
                  var strTime = hours + ':' + minutes + ' ' + ampm;

                  var createdAt_date = createdAt.getDate()+' '+month + ' ' + createdAt.getFullYear()+', '+strTime;

                  html+= '<p class="date">'+createdAt_date+'</p>';

                  html+='</div></li>';
                  $('.messages').append(html);

                   scrollToBottom();
              }
            });
        }


        $('.user').click(function() {
            $('.user').removeClass('useractive');
            $(this).addClass('useractive');
            $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');
            job_id = $(this).attr('job-id');

             $.ajax({
              type: 'post',
              url: "<?php echo e(route('get-user-messages')); ?>",
              data: { '_token': $('input[name=_token]').val(),
                      'receiver_id' : receiver_id, 'job_id' : job_id },
              success: function(res) {
                  $('#messages').html(res);
                  $('#file_received_id').val(receiver_id);
                  $('#file_job_id').val(job_id);
                  $('#deletereceiver_id').val(receiver_id);
                  scrollToBottom();
              }
            });
        });

        $(document).on('keyup', '.input-text input', function(e) {
            var message = $(this).val();

            if(e.keyCode==13 && message!='' && receiver_id!=''){
                $(this).val('');
                $.ajax({
                  type: 'post',
                  url: "<?php echo e(route('post-user-messages')); ?>",
                  data: { '_token': $('input[name=_token]').val(),
                          'receiver_id' : receiver_id, 
                          'job_id' : job_id,
                           'message' : message  
                        },
                  success: function(res) {
                      $('.submit').focus();
                  }
                });
            }
        });

        $(document).on('click', '.sendMessage', function(e) {
            var message = $('.input-text input').val();
            if(message!='' && receiver_id!=''){
                $('.input-text input').val('');

                $.ajax({
                  type: 'post',
                  url: "<?php echo e(route('post-user-messages')); ?>",
                  data: { '_token': $('input[name=_token]').val(),
                          'receiver_id' : receiver_id, 
                          'job_id' : job_id,
                           'message' : message  
                        },
                  success: function(res) {
                      $('.submit').focus();
                  }
                });
            }
        });

    });
    
    function scrollToBottom() {
      var objDiv = $(".messages");
      var h = objDiv.get(0).scrollHeight;

      objDiv.animate({scrollTop: h}, "fast");
    }

    $(document).delegate(':file', 'change', function() {
       var error = false;
       $("#file_error").html("");
       var file_size = $('#file-input')[0].files[0].size/1024/1024;
       var file_name = $('#file-input')[0].files[0].name;
       var file_type = $('#file-input')[0].files[0].type;

       var validImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/jpg'];
      if (!validImageTypes.includes(file_type)) {
          $('.previewImagediv').hide();
      }  else {
        $('.previewImagediv').show();
        $('#previewImage').attr('src', URL.createObjectURL($('#file-input')[0].files[0]));
      }

       // previewImage
       $('#file_name').text(file_name);

       if(file_size>20) {
        $("#file_error").html("<p class='mt-2' style='color:#FF0000; margin-top:20px;'>File size more than 20MB is not allowed</p>");
        var error = true;
       } else {
        $("#file_error").html("");
        var error = false;
      }

      if(error){
         $('.uploadbtn').prop('disabled', true);
      } else {
         $('.uploadbtn').prop('disabled', false);
      }

   });

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>