<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name')); ?></title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />

        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="icon" href="<?php echo e(asset('images/logo.jpeg')); ?>">
        <style>
    
          .bootstrap-tagsinput .tag {
              margin-right: 2px;
              color: #ffffff;
              background: #2196f3;
              padding: 3px 7px;
              border-radius: 3px;
          }
  
          .bootstrap-tagsinput {
              width: 100%;
          }
         
      </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="padding-left: 10px;">
            <a class="navbar-brand" href="#"><h3>Medium</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('articles.index')); ?>">Articles</a>
                </li>
                
                <?php if(auth()->user()): ?>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><?php echo e(auth()->user()->name); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </li>
                <?php else: ?>  
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                <?php endif; ?>
              </ul>
            </div>
          </nav>
          
        <div class="container" style="margin-top: 70px;">
         <?php echo $__env->yieldContent('content'); ?>
        </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
      
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\mediumApp\resources\views/layouts/app.blade.php ENDPATH**/ ?>