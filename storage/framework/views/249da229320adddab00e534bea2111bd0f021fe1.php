
<?php $__env->startSection('content'); ?>
<div class="bg-white p-5">
    <h1 class="text-center"><?php echo e($article->title); ?></h1>
    <hr/>
    <?php if($article->cover != ''): ?>
    <div class="d-flex justify-content-center">
        <img src="../images/<?php echo e($article->cover); ?>" alt="" style="width: 50%; height: 50%; max-height: 350px;">
    </div>
    <?php endif; ?>
    <br>
    <dl>   
        <dd><?php echo e($article->description); ?></dd>    
    </dl>
    <?php if($photos->count()): ?>
    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="m-2">
        <img src="../images/<?php echo e($photo->photo); ?>" alt="" style="width: 50%; height: 50%; max-height: 350px;">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mediumApp\resources\views/articles/show.blade.php ENDPATH**/ ?>