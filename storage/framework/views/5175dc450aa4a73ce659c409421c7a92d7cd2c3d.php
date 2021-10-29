<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<div class="form-body">	
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'page_slug'); ?>">
        <?php echo Form::label('page_slug', 'Page Slug', ['class' => 'bold']); ?>                    
        <?php echo Form::text('page_slug', null, array('class'=>'form-control', 'id'=>'page_slug', 'placeholder'=>'Page Slug')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'page_slug'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'show_in_top_menu'); ?>">
        <?php echo Form::label('show_in_top_menu', 'Show in top Menu', ['class' => 'bold']); ?>

        <div class="radio-list">
            <?php
            $radio_1 = 'checked="checked"';
            $radio_2 = '';
            if (old('show_in_top_menu', ((isset($cms)) ? $cms->show_in_top_menu : 1)) == 0) {
                $radio_1 = '';
                $radio_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="show_in_top_menu" name="show_in_top_menu" type="radio" value="1" <?php echo e($radio_1); ?>>
                Yes </label>
            <label class="radio-inline">
                <input id="not_show_in_top_menu" name="show_in_top_menu" type="radio" value="0" <?php echo e($radio_2); ?>>
                No </label>
        </div>
        <?php echo APFrmErrHelp::showErrors($errors, 'show_in_top_menu'); ?>

    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'show_in_footer_menu'); ?>">
        <?php echo Form::label('show_in_footer_menu', 'Show in footer Menu', ['class' => 'bold']); ?>

        <div class="radio-list">
            <?php
            $radio_1 = 'checked="checked"';
            $radio_2 = '';
            if (old('show_in_footer_menu', ((isset($cms)) ? $cms->show_in_footer_menu : 1)) == 0) {
                $radio_1 = '';
                $radio_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="show_in_footer_menu" name="show_in_footer_menu" type="radio" value="1" <?php echo e($radio_1); ?>>
                Yes </label>
            <label class="radio-inline">
                <input id="not_show_in_footer_menu" name="show_in_footer_menu" type="radio" value="0" <?php echo e($radio_2); ?>>
                No </label>
        </div>
        <?php echo APFrmErrHelp::showErrors($errors, 'show_in_footer_menu'); ?>

    </div>
</div>