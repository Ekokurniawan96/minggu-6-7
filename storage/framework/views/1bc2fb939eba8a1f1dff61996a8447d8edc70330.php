
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('admin/produkAdmin/filter')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo e($nama ?? ''); ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="<?php echo e($stok ?? ''); ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga Min</label>
                                    <input type="text" name="harga_min" class="form-control" value="<?php echo e($harga_min ?? ''); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga Max</label>
                                    <input type="text" name="harga_max" class="form-control" value="<?php echo e($harga_max ?? ''); ?>">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-search">Filter</i></button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="<?php echo e(url('admin/produkAdmin/create')); ?>" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </thead>
                        <tbody>
                            <tr> <?php $__currentLoopData = $list_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produkAdmin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo e(url('admin/produkAdmin', $produkAdmin->id)); ?>" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="<?php echo e(url('admin/produkAdmin', $produkAdmin->id)); ?>/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        <?php echo $__env->make('template.action.delete', ['url' => url('admin/produkAdmin', $produkAdmin->id)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </td>

                                <td><?php echo e($produkAdmin->nama); ?></td>
                                <td><?php echo e($produkAdmin->harga); ?></td>
                                <td><?php echo e($produkAdmin->stok); ?></td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/admin/produk.blade.php ENDPATH**/ ?>