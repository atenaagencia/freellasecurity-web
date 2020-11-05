<?php if(null !== ($messages)): ?>
<?php foreach($messages as $msg){?>
<li class="<?php if($msg->type=='message'){?>friend-message<?php }else{?>my-message<?php }?> clearfix tab<?php echo e($seeker->id); ?>">
<figure class="profile-picture"><?php if($msg->type=='message'){?> <?php echo e($seeker->printUserImage(100, 100)); ?> <?php }else{?><?php echo e($company->printCompanyImage()); ?> <?php }?></figure>
  <div class="message"> <?php echo e($msg->message); ?>

    <div class="time"><i class="fa fa-clock-o"></i><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $msg->updated_at)->diffForHumans()); ?></div>
  </div>
</li>
<?php } ?>
<?php endif; ?>