<?php $__env->startSection('content'); ?>
    <!-- Header start -->
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Header end -->
    <!-- Inner Page Title start -->
    <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Notification')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="notifications" id="notifications">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="notification-list">
                        <ul class="load-notification" id="load-notification">
                            <?php echo e(csrf_field()); ?>

                            
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <style>
        .notifications {
            padding: 50px 0;
        }

        .notifications .notification-list {
            margin: 0 50px;
        }

        .notifications .notification-list ul > li {
            padding: 10px 0;
            border-bottom: 1px solid #8b96a4;
        }

        .notification-list ul > li a {
            color: #000;
            text-decoration: none;
        }

        .notifications .notification-list ul > li:last-child {
            border-bottom: 0;
        }

        .btn {
            border-radius: 0px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function () {

            var _token = $('input[name="_token"]').val();

            load_data('', _token);

            function load_data(id = "", _token) {
                $.ajax({
                    url: "<?php echo e(route('notification.load_notification')); ?>",
                    method: "POST",
                    data: {id: id, _token: _token},
                    success: function (data) {
                        console.log("====>>>>>>No Load More",data);

                        $('#load_more_button').remove();
                        $('#load-notification').append(data);
                    }
                })
            }

            $(document).on('click', '#load_more_button', function () {
                let id = $(this).data('id');
                console.log("====>>>>ID......",id);
                $('#load_more_button').html('<b>Loading...</b>');
                load_data(id, _token);
            });

        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>