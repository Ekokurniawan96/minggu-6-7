
<?php $__env->startSection('content'); ?>
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kategori
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('admin/kategoriAdmin')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="row">
                            <div class="col-md-6 no-gutters">
                                <div class="form-group">
                                    <label for="" class="control-label">Brand</label>
                                    <input type="text" class="form-control" name="brand">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat Bersih</label>
                                    <input type="text" class="form-control" name="beratbersih">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga Minimal</label>
                                    <input type="text" class="form-control" name="hargamin">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-dark float-right"><i class="fa fa-save">Simpan Data</i></button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/admin/createKategori.blade.php ENDPATH**/ ?>