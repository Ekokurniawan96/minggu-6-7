
<?php $__env->startSection('content'); ?>
<div class="container" style="background-color: grey;">

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Data User
                    <a href="<?php echo e(url('admin/user/create')); ?>" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                            <tr> <?php $__currentLoopData = $list_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo e(url('admin/user', $user->id)); ?>" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="<?php echo e(url('admin/user', $user->id)); ?>/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        <?php echo $__env->make('template.action.delete', ['url' => url('admin/user', $user->id)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </td>

                                <td><?php echo e($user->username); ?></td>
                                <td><?php echo e($user->nama); ?></td>
                                <td><?php echo e($user->produk_count); ?></td>
                                <td><?php echo e($user->email); ?></td>
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
<?php echo $__env->make('admin.baseAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/user/index.blade.php ENDPATH**/ ?>