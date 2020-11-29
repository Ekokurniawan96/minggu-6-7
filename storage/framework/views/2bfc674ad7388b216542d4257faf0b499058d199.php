
<?php $__env->startSection('content'); ?>
<div class="container" style="background-color: grey;">

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3><?php echo e($user->nama); ?></h3>
                    <hr>
                    <p>
                        @ <?php echo e($user->username); ?> |
                        Email : <?php echo e(($user->email)); ?>

                    </p>
                    <p>

                        No Handphone : <?php echo e($user->detail->no_handphone); ?>

                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/user/show.blade.php ENDPATH**/ ?>