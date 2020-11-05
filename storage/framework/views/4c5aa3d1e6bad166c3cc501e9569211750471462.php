<?php $__env->startSection('content'); ?> 
<!-- Header start --> 
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- Header end --> 
<!-- Inner Page Title start --> 
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Company Messages')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="listpgWraper messageWrap">
    <div class="container">
        <div class="row"> <?php echo $__env->make('includes.company_dashboard_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9 col-sm-8">
                <div class="myads message-body">
                    <h3><?php echo e(__('Company Messages')); ?></h3> 
                          <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <div class="message-inbox">
                                <div class="message-header">
                                </div>
                                <div class="list-wrap">
                                  <ul class="message-history">
                                    <?php if(null !== ($seekers)): ?>
                                    <?php foreach($seekers as $seeker){?>
                                    <li class="message-grid" id="adactive<?php echo e($seeker->id); ?>"> 
                                      <a  href="javascript:;" data-gift="<?php echo e($seeker->id); ?>" id="company_id_<?php echo e($seeker->id); ?>"  onclick="show_messages(<?php echo e($seeker->id); ?>)">
                                      <div class="image"> 
                                     <?php echo e($seeker->printUserImage(100, 100)); ?>

                                      </div>
                                      <div class="user-name">
                                        <div class="author"> <span><?php echo e($seeker->name); ?></span>                       
                                        </div>
                                        <?php if($seeker->countMessages(Auth::guard('company')->user()->id)!='0'): ?> 
                                        <div class="count-messages badge badge_<?php echo e($seeker->id); ?>">
                                        <?php echo e($seeker->countMessages(Auth::guard('company')->user()->id)); ?> 
                                        </div>  
                                        <?php endif; ?>                  
                                      </div>
                                    
                                      </a> 
                                    </li>
                                    <?php } ?>
                                    <?php endif; ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-8 col-md-8 clearfix message-content">
                              <div class="message-details">
                              <h4> </h4>
                                <div id="append_messages"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                </div>
            </div>
          </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
function show_messages(id)
{
      $.ajax({
        type: 'get',
        url: "<?php echo e(route('append-message')); ?>",
        data: {
          '_token': $('input[name=_token]').val(),
          'seeker_id': id,
        },
        success: function(res) {
          $('#append_messages').html('');
          $('#append_messages').html(res);
          $(".messages").scrollTop(1000000000000);
          $('.messages').off('scroll');
          $('.message-grid').removeClass('active');
          $("#adactive"+id).addClass('active');
          $('.badge_'+id).html('');
        }
      });

  }
  
    
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>