<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<!--
  
    <?php echo $__env->make('inc.sidemenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item <?php echo e(Request::is('contact') ? 'active' : ''); ?>">
        <a class="nav-link" href="/contact">Contact</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
-->
    
    <div class="container">
<!--        <?php echo $__env->make('inc.sidemenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->
        <a class="navbar-brand navbar-left" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item <?php echo e(Request::is('display') ? 'active' : ''); ?>">
                <a class="nav-link" href="/display">Display</a>
            </li>
        <!-- Authentication Links -->
        <?php if(auth()->guard()->guest()): ?>
            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
        <?php else: ?>
              
            <li class="nav-item <?php echo e(Request::is('upload') ? 'active' : ''); ?>">
                <a class="nav-link" href="/upload">Upload</a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
                <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>
            </li>
        <?php endif; ?>
          </ul>
        </div>
        <form class="navbar-form navbar-right" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
    </div>
</nav>
