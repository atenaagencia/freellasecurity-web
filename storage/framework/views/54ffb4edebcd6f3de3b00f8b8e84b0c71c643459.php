<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form" id="add_edit_profile_experience" method="POST" action="<?php echo e(route('store.front.profile.experience', [$user->id])); ?>"><?php echo e(csrf_field()); ?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo e(__('Add Experience')); ?></h4>
            </div>
            <?php echo $__env->make('user.forms.experience.experience_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="modal-footer">
                <button type="button" class="btn btn-large btn-primary" onClick="submitProfileExperienceForm();"><?php echo e(__('Add Experience')); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>
    <!-- /.modal-content --> 
</div>
<!-- /.modal-dialog -->