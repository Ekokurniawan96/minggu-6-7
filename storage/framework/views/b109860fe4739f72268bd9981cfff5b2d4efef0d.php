
<?php $__env->startSection('content'); ?>
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('admin/user')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">No Handphone</label>
                            <input type="text" class="form-control" name="no_handphone">
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save">Simpan Data</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/user/create.blade.php ENDPATH**/ ?>