<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<div class="form-body">
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'seo_title'); ?>">
        <?php echo Form::label('seo_title', 'SEO Title', ['class' => 'bold']); ?>                    
        <?php echo Form::text('seo_title', null, array('class'=>'form-control', 'id'=>'seo_title', 'placeholder'=>'SEO Title')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'seo_title'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'seo_description'); ?>">
        <?php echo Form::label('seo_description', 'SEO Description', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('seo_description', null, array('class'=>'form-control', 'id'=>'seo_description', 'placeholder'=>'SEO Description')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'seo_description'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'seo_keywords'); ?>">
        <?php echo Form::label('seo_keywords', 'SEO Keywords', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('seo_keywords', null, array('class'=>'form-control', 'id'=>'seo_keywords', 'placeholder'=>'SEO Keywords')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'seo_keywords'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'seo_other'); ?>">
        <?php echo Form::label('seo_other', 'Other SEO Tags', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('seo_other', null, array('class'=>'form-control', 'id'=>'seo_other', 'placeholder'=>'Other SEO Tags')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'seo_other'); ?>                                       
    </div>
</div>