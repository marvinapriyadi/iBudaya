<?php $__env->startSection('content'); ?>
<html>
   <body>
      <form action="/upload" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        Name:
        <br />
        <input type="text" name="name" />
        <br /><br />
        Image:
        <br />
        <input type="file" name="image" />
        <br /><br />
        <input type="submit" value="Upload" />
       </form>
   </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>