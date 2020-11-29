<?php $__currentLoopData = ['success', 'warning', 'danger']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(session($status)): ?>
<div class="alert alert-<?php echo e($status); ?> alert-dismissable custom-<?php echo e($status); ?>-box">
    <a href="" class="close " data-dismis="alert" aria-label="close">&times;</a>
    <strong><?php echo e(session($status)); ?></strong>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\blog - Copy\system\resources\views/template/action/notif.blade.php ENDPATH**/ ?>