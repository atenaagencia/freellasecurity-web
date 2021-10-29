<?php
$lang = 'en';
if (isset($language))
    $lang = $language->lang;
$lang = MiscHelper::getLang($lang);
$direction = MiscHelper::getLangDirection($lang);
$queryString = MiscHelper::getLangQueryStr();
?>
<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">        
    <?php echo Form::hidden('id', null); ?>

    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'lang'); ?>">
        <?php echo Form::label('lang', 'Language', ['class' => 'bold']); ?>

        <?php echo Form::text('lang', null, array('class'=>'form-control', 'id'=>'lang', 'placeholder'=>'Language')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'lang'); ?>

    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'native'); ?>">
        <?php echo Form::label('native', 'Native', ['class' => 'bold']); ?>

        <?php echo Form::text('native', null, array('class'=>'form-control', 'id'=>'native', 'placeholder'=>'Native')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'native'); ?>

    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'iso_code'); ?>">
        <?php echo Form::label('iso_code', 'ISO Code', ['class' => 'bold']); ?>

        <?php echo Form::text('iso_code', null, array('class'=>'form-control', 'id'=>'iso_code', 'placeholder'=>'ISO Code')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'iso_code'); ?>

    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'is_active'); ?>">
        <?php echo Form::label('is_active', 'Is Active?', ['class' => 'bold']); ?>

        <div class="radio-list">
            <?php
            $is_active_1 = 'checked="checked"';
            $is_active_2 = '';
            if (old('is_active', ((isset($language)) ? $language->is_active : 1)) == 0) {
                $is_active_1 = '';
                $is_active_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="active" name="is_active" type="radio" value="1" <?php echo e($is_active_1); ?>>
                Active </label>
            <label class="radio-inline">
                <input id="not_active" name="is_active" type="radio" value="0" <?php echo e($is_active_2); ?>>
                In-Active </label>
        </div>			
        <?php echo APFrmErrHelp::showErrors($errors, 'is_active'); ?>

    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'is_rtl'); ?>">
        <?php echo Form::label('is_rtl', 'Is RTL?', ['class' => 'bold']); ?>

        <div class="radio-list">
            <?php
            $radio_1 = 'checked="checked"';
            $radio_2 = '';
            if (old('is_rtl', ((isset($language)) ? $language->is_rtl : 1)) == 0) {
                $radio_1 = '';
                $radio_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="is_rtl" name="is_rtl" type="radio" value="1" <?php echo e($radio_1); ?>>
                Yes </label>
            <label class="radio-inline">
                <input id="is_not_rtl" name="is_rtl" type="radio" value="0" <?php echo e($radio_2); ?>>
                No </label>
        </div>			
        <?php echo APFrmErrHelp::showErrors($errors, 'is_rtl'); ?>

    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'is_default'); ?>">
        <?php echo Form::label('is_default', 'Is default?', ['class' => 'bold']); ?>

        <div class="radio-list">
            <?php
            $is_default_1 = 'checked="checked"';
            $is_default_2 = '';
            if (old('is_default', ((isset($language)) ? $language->is_default : 1)) == 0) {
                $is_default_1 = '';
                $is_default_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="default" name="is_default" type="radio" value="1" <?php echo e($is_default_1); ?>>
                Yes </label>
            <label class="radio-inline">
                <input id="not_default" name="is_default" type="radio" value="0" <?php echo e($is_default_2); ?>>
                No </label>
        </div>			
        <?php echo APFrmErrHelp::showErrors($errors, 'is_default'); ?>

    </div>	
    <div class="form-actions">
        <?php echo Form::button('Update <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>', array('class'=>'btn btn-large btn-primary', 'type'=>'submit')); ?>

    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    function setLang(lang) {
        window.location.href = "<?php echo url(Request::url()) . $queryString; ?>" + lang;
    }
    function showHideLanguageId() {
        $('#language_id_div').hide();
        var is_default = $("input[name='is_default']:checked").val();
        if (is_default == 0) {
            $('#language_id_div').show();
        }
    }
    showHideLanguageId();
</script>
<?php $__env->stopPush(); ?>