<!-- ========== Modadl for Upload File =============== -->
<div class="modal fade" id="uploadfilemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="post" id="upload_form" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
      </div>
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <label for="file-input">
                    <img src="https://goo.gl/pB9rpQ"/ class="selectFile">
                </label>

                <input id="file-input" name="inputfile" type="file"/>
                <span id="file_name"></span>
                <span id="file_error"></span>
            </div>
            <input type="hidden" name="file_received_id" id="file_received_id">
            <input type="hidden" name="file_job_id" id="file_job_id">
            <div class="col-md-6 previewImagediv" style="display: none;">
                <img id="previewImage" height="100px" width="100px">
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 uploadmessages">
            <div class="alert" id="message" style="display: none"></div>
          </div>    
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary uploadbtn" disabled="disabled" value="Upload">
      </div>
      </form>   
    </div>
  </div>
</div>
<!-- ========== Modadl for Upload File =============== -->

<!-- ========== Modadl for Delete confrmation of attached file =============== -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteconfirmation" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="post" id="deleteconfirmation_form">
        <?php echo e(csrf_field()); ?>

      <div class="modal-header">
        <h5 class="modal-title" id="deleteconfirmation">Delete Conformation</h5>
      </div>
      
      <div class="modal-body"><p>Are you sure want to remove this file?</p></div>
      <input type="hidden" name="deletemessageId" id="deletemessageId">
      <input type="hidden" name="deletereceiver_id" id="deletereceiver_id">

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">No</button>
        <input type="submit" class="btn btn-danger" value="Yes">
      </div>
      </form>   
    </div>
  </div>
</div>
<!-- ========== Modadl for Delete confrmation of attached file =============== -->

<?php
  $f = Auth::guard('company')->user()->name;
?>
<?php
  
  // if(isset($merge_data_employee[0]->name)){
  //   $receiver_name = $merge_data_employee[0]->name;
  // }
  //$receiver_image = $merge_data_employee[1]->image;
?>
<div class="messages-wrapper">
    <ul class="messages">
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <?php if($message->from===Auth::guard('company')->user()->id): ?>
          <?php if(Auth::guard('company')->user()->logo!=''): ?>
            <img src="<?php echo e(asset('/company_logos/'.Auth::guard('company')->user()->logo)); ?>" class="can_img">
          <?php else: ?>
            <img src="<?php echo e(asset('/company_logos/default_logo.png')); ?>" class="can_img">
          <?php endif; ?>
          
            <div class="can_name"><?php echo $f; ?></div>
          <?php else: ?>
              <p class="emp_name"><?php echo e($userData[0]->name); ?></p>

               <?php if($userData[0]->image != ''): ?>
                  <p><img src="<?php echo e(asset('/user_images/'.$userData[0]->image)); ?>" class="default_image_css">
                  </p>
              <?php else: ?>
                  <p><img src="<?php echo e(asset('/company_logos/default_logo.png')); ?>" class="default_image_css">
                  </p>
              <?php endif; ?>
         <?php endif; ?>
        <li class="message clearfix">
            <div class="<?php echo e(($message->from===Auth::guard('company')->user()->id) ? 'messagesent': 'messagereceived'); ?>">
             <?php if($message->message_type==1): ?>
              <span class="fa fa-paperclip attached"></span>
              
              <p><a href="<?php echo e(asset('/images/chats/'.$message->message)); ?>" download><?php echo e($message->original_name); ?></a></p>
              
              <p class="pull-right downloadIcon"><a href="<?php echo e(asset('/images/chats/'.$message->message)); ?>" download><span class="glyphicon glyphicon-download"></span></a></p>    
              
              <?php elseif($message->message_type==2): ?>
              <span class="fa fa-paperclip attached"></span>
              
              <p><a href="<?php echo e(asset('/images/chats/'.$message->message)); ?>" download><img src="<?php echo e(asset('/images/chats/'.$message->message)); ?>" height="200px" width="220px"></a>
              </p>
              
              <p class="pull-right downloadIcon"><a href="<?php echo e(asset('/images/chats/'.$message->message)); ?>" download><span class="glyphicon glyphicon-download"></span></a>
              </p>
            
              <?php else: ?>
                <p class="textmessage"><?php echo e($message->message); ?></p>
              <?php endif; ?>
                <p class="date"><?php echo e(date('d M Y, h:i a', strtotime($message->created_at))); ?></p>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<div class="image-upload pull-right">
    <label>
        <span class="fa fa-paperclip paperclipIcon" onclick="DisableModalOutsideClick('uploadfilemodal')" data-toggle="modal" data-target="#uploadfilemodal"></span>
    </label>
</div>

<div class="input-group input-text inputgrouptextBox">
    <input type="text" name="message" class="submit" placeholder="Type a message...">
</div>

<div style="margin-top: 5px;">
    <label>
        <button type="button" class="btn btn-primary sendMessage">Send</button>
    </label>
</div>