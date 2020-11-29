
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Kategori
                </div>
                <div class="card-body">
                    <h3><?php echo e($kategoriAdmin->nama); ?></h3>
                    <hr>
                    <p>
                        Rp.<?php echo e(number_format($kategoriAdmin->hargamin)); ?> |
                        Berat Bersih : <?php echo e(($kategoriAdmin->beratbersih)); ?> Gram |
                        Brand : <?php echo e($kategoriAdmin->brand); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/admin/showKategori.blade.php ENDPATH**/ ?>