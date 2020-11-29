
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3><?php echo e($produkAdmin->nama); ?></h3>
                    <hr>
                    <p>
                        Rp.<?php echo e(number_format($produkAdmin->harga)); ?> |
                        Stok : <?php echo e(($produkAdmin->stok)); ?> |
                        Berat : <?php echo e(($produkAdmin->berat)); ?> Gr
                        Seller : <?php echo e($produkAdmin->seller->nama); ?>

                    </p>
                    <hr>
                    <p>
                        <?php echo nl2br($produkAdmin->deskripsi); ?>

                    </p>



                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/admin/showProduk.blade.php ENDPATH**/ ?>