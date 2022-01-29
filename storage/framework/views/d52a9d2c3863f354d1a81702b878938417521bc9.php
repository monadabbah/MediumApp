

<?php $__env->startSection('content'); ?>
<div class="container bg-white p-5" style="width: 58%;">
  <h2 class="m-2">Start Writing</h2>
  <form action="<?php echo e(route('articles.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group m-2">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter title" value="<?php echo e(old('title')); ?>">
      <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group m-2">
      <label for="body">Body</label><br>
      <textarea class="form-control" name="body" rows="10" placeholder="Write something..."></textarea>
      <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="text-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="m-2">
      <label for="tags">Tags</label><br>
      <input class="form-control" type="text" data-role="tagsinput" name="tags" value="<?php echo e(old('tags')); ?>">
      <?php if($errors->has('tags')): ?>
        <span class="text-danger"><?php echo e($errors->first('tags')); ?></span>
      <?php endif; ?>
    </div>
    <div class="m-2">
      <label for="cover">Cover Image</label>
      <input type="file" class="form-control" name="cover">
    </div>
    <div class="m-2">
      <label for="images">Images</label>
      <input type="file" class="form-control" name="images[]" multiple>
    </div>
    <button type="submit" class="m-2 btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mediumApp\resources\views/articles/create.blade.php ENDPATH**/ ?>