<form action="<?php echo e($url); ?>" method="post" class="form-inline" onsubmit="return confirm('Yakin menghapus data ini')">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/template/action/delete.blade.php ENDPATH**/ ?>