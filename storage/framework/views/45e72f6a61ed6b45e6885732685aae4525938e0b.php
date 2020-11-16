<?php $__env->startSection('content'); ?> 
<!-- Header start --> 
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Header end --> 
<!-- Inner Page Title start --> 
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('My Messages')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="listpgWraper messageWrap">
    <div class="container">
     <!--  <div class="row pull-right">
          <div class="col-lg-12">
              <div class="dropdown leftBarLinks">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu 
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="<?php echo e(route('home')); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> <?php echo e(__('Dashboard')); ?></a>
                    </li>
                    <li><a href="<?php echo e(route('my.profile')); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('My Profile')); ?></a>
                    </li>
                    <li><a href="<?php echo e(route('view.public.profile', Auth::user()->id)); ?>"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo e(__('View Public Profile')); ?></a>
                    </li>
                    <li><a href="<?php echo e(route('my.job.applications')); ?>"><i class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(__('My Job Applications')); ?></a>
                    </li>
                    <li><a href="<?php echo e(route('my.favourite.jobs')); ?>"><i class="fa fa-heart" aria-hidden="true"></i> <?php echo e(__('My Favourite Jobs')); ?></a>
                    </li>
                    //Below line is added by Hetal(Line number : 26) 
                    <li><a href="<?php echo e(route('jobs.developmentstatus')); ?>"><i class="fa fa-gears" aria-hidden="true"></i> <?php echo e(__('Development Status')); ?></a>
                    </li>
                    
                    <li><a href="<?php echo e(route('my.messages')); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo e(__('My Messages')); ?></a>
                    </li> 

                    <li><a href="<?php echo e(route('my.chats')); ?>"><i class="fa fa-comments" aria-hidden="true"></i> <?php echo e(__('My Chats')); ?></a>
                   
                    <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo e(__('Logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
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
                          <?php $__currentLoopData = $companyDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!empty($company[0]->hiredprojectData)): ?>
                              <?php $__currentLoopData = $company[0]->hiredprojectData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="user <?php echo e($projectData['job_id']); ?>" job-id="<?php echo e($projectData['job_id']); ?>" id="<?php echo e($company[0]->id); ?>">
                              <?php if($projectData['unread']): ?>
                                <span class="pending"><?php echo e($projectData['unread']); ?></span>
                              <?php endif; ?>
                              
                                <div class="media">
                                    <div class="media-left">
                                      <?php if($company[0]->logo!=""): ?>
                                        <img src="<?php echo e(asset('company_logos/'.$company[0]->logo)); ?>" alt="" class="media-object" height="">
                                      <?php else: ?>
                                        <img src="<?php echo e(asset('company_logos/default_logo.png')); ?>" alt="" class="media-object" height="">
                                      <?php endif; ?>
                                        
                                    </div>

                                    <div class="media-body chatnames">
                                        <p class="name"><?php echo e($company[0]->name); ?></p>
                                        <p class="email"><?php echo e($projectData['job_title']); ?></p>
                                        <p class="email"><?php echo e($company[0]->email); ?></p>
                                    </div>
                                </div>
                            </li>
                            <hr style="margin-top:2px; margin-bottom: 2px;border: 1px solid lightgray;">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php else: ?>
                            <li class="user" job-id="0" id="<?php echo e($company[0]->id); ?>">
                              <?php if($company[0]->unread): ?>
                                <span class="pending"><?php echo e($company[0]->unread); ?></span>
                              <?php endif; ?>
                              
                                <div class="media">
                                    <div class="media-left">
                                      <?php if($company[0]->logo!=""): ?>
                                        <img src="<?php echo e(asset('company_logos/'.$company[0]->logo)); ?>" alt="" class="media-object" height="">
                                      <?php else: ?>
                                        <img src="<?php echo e(asset('company_logos/default_logo.png')); ?>" alt="" class="media-object" height="">
                                      <?php endif; ?>
                                        
                                    </div>

                                    <div class="media-body">
                                        <p class="name"><?php echo e($company[0]->name); ?></p>
                                        <p class="email"><?php echo e($company[0]->email); ?></p>
                                    </div>
                                </div>
                            </li>
                            <hr style="margin-top:1px; margin-bottom: 1px;border: 1px solid lightgray;">
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
        url: "<?php echo e(route('fileupload.post')); ?>",
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
        url: "<?php echo e(route('deletefile-post')); ?>",
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
  var my_id = "<?php echo e(auth::id()); ?>";
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
              if(receiver_id==data.from && job_id==data.job_id){
                  // If receiver is selected reload the chat messages
                  appendNewmessage(receiver_id, job_id);
                  // $('#' + data.from).click();
              } else { // else add notification messages
                var pending = parseInt($('.'+ data.job_id).find('.pending').html() );                  

                if(pending){
                  $('.'+ data.job_id).find('.pending').html(pending + 1);
                } else {
                  $('.'+ data.job_id).append('<span class="pending">1</span>');
                }
      
              }
          }
        });

        function appendNewmessage(to, job_id) {
            var from = "<?php echo e(Auth::id()); ?>";
            var from_first_name = "<?php echo e(Auth::user()->first_name); ?>";
            var from_last_name = "<?php echo e(Auth::user()->last_name); ?>";
            var from_image = "<?php echo e(Auth::user()->image); ?>";

            $.ajax({
              type: 'post',
              url: "<?php echo e(route('get-company-last-message')); ?>",
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
                    if(from_image==''){
                      html+='<img src="<?php echo e(asset('/company_logos/default_logo.png')); ?>" class="can_img">';
                    } else {
                      html+='<img src="<?php echo e(asset('/user_images/'.Auth::user()->image)); ?>" class="can_img">';
                    }
                      
                      html+='<div class="can_name">'+from_first_name+' '+from_last_name+'</div>';
                  }
                  else{
                        html+='<p class="can_name_merge">'+res.name+'</p>';
                        if(res.logo=='' || res.logo==null){
                          html+='<p><img src="'+base_url+'/company_logos/default_logo.png" class="default_image_css"></p>';
                        } else {
                         html+='<p><img src="'+base_url+'/company_logos/'+res.logo+'" class="default_image_css"></p>';
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
              url: "<?php echo e(route('get-company-messages')); ?>",
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
                  url: "<?php echo e(route('post-company-messages')); ?>",
                  data: { '_token': $('input[name=_token]').val(),
                          'receiver_id' : receiver_id, 
                           'message' : message,
                           'job_id' : job_id  
                        },
                  success: function(res) {
                     $('.submit').focus();
                     $.fn.setCursorPosition = function (pos) {
                    this.each(function (index, elem) {
                        if (elem.setSelectionRange) {
                            elem.setSelectionRange(pos, pos);
                        } else if (elem.createTextRange) {
                            var range = elem.createTextRange();
                            range.collapse(true);
                            range.moveEnd('character', pos);
                            range.moveStart('character', pos);
                            range.select();
                        }
    });
    return this;
};
$('input[name=message]').focus().setCursorPosition(1);
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
                  url: "<?php echo e(route('post-company-messages')); ?>",
                  data: { '_token': $('input[name=_token]').val(),
                          'receiver_id' : receiver_id, 
                           'message' : message,
                           'job_id' : job_id
                        },
                  success: function(res) {
                     $('.submit').focus();
                     $.fn.setCursorPosition = function (pos) {
                    this.each(function (index, elem) {
                        if (elem.setSelectionRange) {
                            elem.setSelectionRange(pos, pos);
                        } else if (elem.createTextRange) {
                            var range = elem.createTextRange();
                            range.collapse(true);
                            range.moveEnd('character', pos);
                            range.moveStart('character', pos);
                            range.select();
                        }
                  });
                    return this;
                  };
                    $('input[name=message]').focus().setCursorPosition(1);
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