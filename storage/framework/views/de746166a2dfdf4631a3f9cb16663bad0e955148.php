<div class="modal-body">
    <div class="form-body">
        <div class="formrow" id="div_name">
            <input class="form-control" autocomplete="off" id="name" placeholder="<?php echo e(__('Project Name')); ?>" name="name" type="text" value="<?php echo e((isset($profileProject)? $profileProject->name:'')); ?>">
            <span class="help-block name-error"></span> </div>

        <?php if(isset($profileProject)): ?>
        <div class="formrow">
            <?php echo e(ImgUploader::print_image("project_images/thumb/$profileProject->image")); ?>

        </div>
        <?php endif; ?>

        <div class="formrow" id="div_image">
            <div class="uploadphotobx dropzone needsclick dz-clickable"  id="dropzone"> <i class="fa fa-upload" aria-hidden="true"></i>
                <div class="dz-message" data-dz-message><span><?php echo e(__('Drop files here or click to upload Project Image')); ?>.</span></div>
                <div class="fallback">
                    <input name="image" type="file" />
                </div>
            </div>
            <span class="help-block image-error"></span> </div>
        <div class="formrow" id="div_url">
            <input class="form-control" id="url" placeholder="<?php echo e(__('Project URL')); ?>" autocomplete="off" name="url" type="text" value="<?php echo e((isset($profileProject)? $profileProject->url:'')); ?>">
            <span class="help-block url-error"></span> </div>
        <div class="formrow" id="div_date_start">
            <input class="form-control datepicker" id="date_start" placeholder="<?php echo e(__('Project Start Date')); ?>" autocomplete="off" name="date_start" type="text" autocomplete="off" value="<?php echo e((isset($profileProject)? $profileProject->date_start:'')); ?>">
            <span class="help-block date_start-error"></span> </div>
        <div class="formrow" id="div_date_end">
            <input class="form-control datepicker" autocomplete="off" id="date_end" placeholder="<?php echo e(__('Project End Date')); ?>" autocomplete="off" name="date_end" type="text" value="<?php echo e((isset($profileProject)? $profileProject->date_end:'')); ?>">
            <span class="help-block date_end-error"></span> </div>  

        <div class="formrow" id="div_is_on_going">
            <label for="is_on_going" class="bold"><?php echo e(__('Is Currently Ongoing')); ?>?</label>
            <div class="radio-list">
                <?php
                $val_1_checked = '';
                $val_2_checked = 'checked="checked"';

                if (isset($profileProject) && $profileProject->is_on_going == 1) {
                    $val_1_checked = 'checked="checked"';
                    $val_2_checked = '';
                }
                ?>

                <label class="radio-inline"><input id="on_going" name="is_on_going" type="radio" value="1" <?php echo e($val_1_checked); ?>> <?php echo e(__('Yes')); ?> </label>
                <label class="radio-inline"><input id="not_on_going" name="is_on_going" type="radio" value="0" <?php echo e($val_2_checked); ?>> <?php echo e(__('No')); ?> </label>
            </div>
            <span class="help-block is_on_going-error"></span>
        </div>

        <div class="formrow" id="div_description">
            <textarea name="description" class="form-control" id="description" placeholder="<?php echo e(__('Project description')); ?>"><?php echo e((isset($profileProject)? $profileProject->description:'')); ?></textarea>
            <span class="help-block description-error"></span> </div>
    </div>
</div>