<?php $__env->startSection('title-page'); ?>
<h1 class="h3 py-4 font-weight-bold text-dark"><?php echo e(__('Company Messages')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row mx-auto mb-5">
  <div class="col-md-12 py-2 p-0 m-0">
    <div class="card rounded-0 shadow p-2">

      <div class="myads message-body">
        <div class="row m-1 py-3">
          <div class="col-md-3">
            <h5>
              <input type="search" class="form-control rounded-0 search" name="search" id="search" placeholder="search...">
            </h5>
            <div class="user-wrapper">
              <?php echo csrf_field(); ?>
              <ul class="users pl-0">

                <li class="nav-link">
                  <div class="row p-0">
                    <div class="col p-0 m-0">
                      <img src="http://localhost:8000/admin_assets/no-image.png" style="width: 50px; height: 50px" alt="employer" title="employer" class="p-0">
                    </div>
                    <div class="col">
                        <small class="mb-0 pb-0">Philip | Freelancer</small>
                        <div class="badge badge-dark">Phill@email.com</div>
                    </div>
                  </div>
                  <hr>
                </li>
                

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

          <div class="col-md-9 bg-light m-0" id="messages">

          </div>
        </div>
      </div>


    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>