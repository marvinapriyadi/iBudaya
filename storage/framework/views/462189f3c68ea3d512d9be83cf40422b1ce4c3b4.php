<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo e(config('app.name', 'iBudaya')); ?></title>
        <?php echo $__env->make('inc.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
        <?php echo $__env->make('inc.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    
    <body>
        <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
            <?php if(Request::is('/')): ?>
                <?php echo $__env->make('inc.showcase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
            <?php else: ?>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-8 col-lg-8">
                        <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    
        <footer class="footer" id="footer">
          <div class="container">
            <span class="text-muted">Copyright 2018 &copy; Nusantara | <a href="/contact">Contact Us</a></span> 
             
          </div>
        </footer>

    </body>
</html>