

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-2 mt-4">
  <h4 class="text-uppercase" style="font-weight: 700;">Articles on medium</h4>
  <a class="btn btn-primary" href="<?php echo e(route('articles.create')); ?>" role="button" style="font-weight: 700; margin-right: 18px;">Write an article</a>
</div>
  <div class="row justify-content-around">
    <?php if($articles->count()): ?>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card m-2" style="width: 41%;">
                <div class="card-body d-flex row">
                  <div class="col-md-8" style="padding-right: 3px;">
                    <h5 class="card-title" style="font-weight: 800;"><?php echo e($article->title); ?></h5>
                    <div class="d-flex mb-2">
                    <h6 class="card-subtitle text-muted">admin,</h6>
                    <h6 class="card-subtitle text-muted" style="margin-left: 5px; margin-right: 5px;"><?php echo e($article->created_at->diffforHumans()); ?></h6>
                    </div>
                    <?php if($article->tags->count()): ?>
                    <div>
                      <strong>Tag:</strong>
                      <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <label class="label label-info"><?php echo e($tag->name); ?></label>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <p class="card-text text-truncate"><?php echo e($article->description); ?></p>
                    <a href="<?php echo e(route('articles.show', $article)); ?>" class="card-link">Read more</a>
                  </div>
                  <div class="col-md-4">
                    <?php if($article->cover != null): ?>
                    <img src="images/<?php echo e($article->cover); ?>" alt="" style="width: 100%; height: 100%; max-height: 200px;">
                    <?php else: ?> 
                    <img src="<?php echo e(asset('images/medium_logo.png')); ?>" alt="" style="width: 100%; height: 100%;">
                    <?php endif; ?>
                  </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($articles->links()); ?>

        <?php else: ?>
            <p>There are no articles</p>
        <?php endif; ?>         
        
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mediumApp\resources\views/index.blade.php ENDPATH**/ ?>