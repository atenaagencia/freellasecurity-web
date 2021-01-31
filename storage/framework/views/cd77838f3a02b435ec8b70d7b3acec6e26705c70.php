<?php $__env->startSection('title-page'); ?>
<h1 class="h3 py-4 font-weight-bold text-dark"><?php echo e(__('Add Payment for Milestones')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row mx-auto mb-5">
	<div class="col-md-12 py-2">
		<div class="card shadow">
			<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- Card Header - Dropdown -->
			<div class="card-header bg-white rounded-0 py-3">
				<h6 class="m-0 font-weight-bold text-dark"><?php echo e(__('Add Payment for Create new Milestone :')); ?></h6>
			</div>
			<!-- Card Body -->
			<div class="card-body bg-white rounded-0">
				<div class="formpanel">
					<?php echo Form::open(array('method' => 'post', 'route' => 'milestone.payment.save', 'class' => 'form')); ?>

					<?php echo e(Form::hidden('pay_type', 'credit_card')); ?>

					<div class="row">
						<div class="col-md-12 py-2" id="error_div"></div>
						<div class="col-md-12 py-2">
							<div class="formrow">
								<input type="hidden" name="freelancer" id='freelancer' value="<?php echo e(isset($post_data['freelancer']) ? $post_data['freelancer'] : old('freelancer')); ?>">
								<input type="hidden" name="job_id" id='job_id' value="<?php echo e(isset($post_data['job_id']) ? $post_data['job_id'] : old('job_id')); ?>">
								<input type="hidden" name="milestone_title" id='milestone_title' value="<?php echo e(isset($post_data['milestone_title']) ? $post_data['milestone_title'] : old('milestone_title')); ?>">
								<input type="hidden" name="task_details" id='task_details' value="<?php echo e(isset($post_data['task_details']) ? $post_data['task_details'] : old('task_details')); ?>">
								<input type="number" style="display: none;" name="price" id='price' value="<?php echo e(isset($post_data['price']) ? $post_data['price'] : old('price')); ?>">
								<input type="hidden" name="start_date" id='start_date' value="<?php echo e(isset($post_data['start_date']) ? $post_data['start_date'] : old('start_date')); ?>">
								<input type="hidden" name="end_date" id='end_date' value="<?php echo e(isset($post_data['end_date']) ? $post_data['end_date'] : old('end_date')); ?>">

								<label><?php echo e(__('Name on Credit Card')); ?></label>
								<input class="form-control" autocomplete="off" name="card_name" id="card_name" placeholder="<?php echo e(__('Name on Credit Card')); ?>" type="text">
								<?php if($errors->has('card_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('card_name')); ?></strong> </span> <?php endif; ?>
							</div>
						</div>
						<div class="col-md-12 py-2">
							<div class="formrow">
								<label><?php echo e(__('Credit card Number')); ?></label>
								<input class="form-control" id="card_no" name="card_no" autocomplete="off" placeholder="<?php echo e(__('Credit card Number')); ?>" type="text">
								<?php if($errors->has('card_no')): ?> <span class="help-block"> <strong><?php echo e($errors->first('card_no')); ?></strong> </span> <?php endif; ?>
							</div>
						</div>
						<div class="col-md-6 py-2">
							<div class="formrow">
								<label><?php echo e(__('Credit card Expiry Month')); ?></label>
								<select class="form-control" name="ccExpiryMonth" id="ccExpiryMonth">
									<?php for($counter = 1; $counter <= 12; $counter++): ?> <?php $val=str_pad($counter, 2, '0' , STR_PAD_LEFT); ?> <option value="<?php echo e($val); ?>"><?php echo e($val); ?></option>
										<?php endfor; ?>
								</select>
								<?php if($errors->has('ccExpiryMonth')): ?> <span class="help-block"> <strong><?php echo e($errors->first('ccExpiryMonth')); ?></strong> </span> <?php endif; ?>
							</div>
						</div>
						<div class="col-md-6 py-2">
							<div class="formrow">
								<label><?php echo e(__('Credit card Expiry Year')); ?></label>
								<select class="form-control" name="ccExpiryYear" id="ccExpiryYear">
									<?php
									$ccYears = MiscHelper::getCcExpiryYears();
									?>
									<?php $__currentLoopData = $ccYears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($year); ?>"><?php echo e($year); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<?php if($errors->has('ccExpiryYear')): ?> <span class="help-block"> <strong><?php echo e($errors->first('ccExpiryYear')); ?></strong> </span> <?php endif; ?>
							</div>
						</div>
						<div class="col-md-12 py-2">
							<div class="formrow">
								<label><?php echo e(__('CVV Number')); ?></label>
								<input class="form-control" id="cvvNumber" name="cvvNumber" autocomplete="off" placeholder="<?php echo e(__('CVV number')); ?>" type="number" pattern="\d*" maxlength="4">
								<?php if($errors->has('cvvNumber')): ?> <span class="help-block"> <strong><?php echo e($errors->first('cvvNumber')); ?></strong> </span> <?php endif; ?>
							</div>
						</div>
						<div class="col-md-12 py-2">
							<div class="formrow">
								<button type="submit" class="btn btn-success"><?php echo e(__('Pay')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<?php echo Form::close(); ?>


				</div>


				<style type="text/css">
					.help-block {
						color: red;
					}
				</style>

				<?php $__env->startPush('scripts'); ?>
				<script type="text/javascript">
					var d = new Date();
					var n = d.getMonth();
					n = n + 1;
					if (n < 10) {
						n = '0' + n;
					}
					$("#card_no").attr({
						maxlength: 16
					});
					$("#ccExpiryMonth").val(n);
				</script>
				<?php $__env->stopPush(); ?>
				
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>