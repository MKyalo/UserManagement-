<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>InventoryManagement</title>

  <link rel="shortcut icon" href="<?php echo e(asset('public/favicon.ico')); ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('public/plugins/fontawesome-free/css/all.min.css')); ?>">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	 <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
 <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('public/dist/css/adminlte.min.css')); ?>">


 


  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></p>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Account Settings</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-alt mr-2"></i> Profile
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-cog mr-2"></i> Settings
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(route('logout')); ?>" 
				onclick="event.preventDefault();
				 document.getElementById('logout-form').submit();" 
				 class="dropdown-item">
            <i class="fas fa-power-off mr-2"></i> Log Out
            <span class="float-right text-muted text-sm"></span>
          </a>
		  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
          
      </li>
    </ul>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(asset('public/dist/img/logo-compact.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Management </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('public/storage/avatars/'.Auth::user()->avatar)); ?>" class="img-circle elevation-2" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			    <?php
                $segment=Request::segment(1);
               ?>
       
          <li class="nav-item">
                <a href="<?php echo e(route('dashboard')); ?>" class="nav-link
                        <?php if($segment=='dashboard'): ?>
                          active
                        <?php endif; ?>
                        ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  
                  </p>
                </a>
          </li>
        <?php if(Gate::check('isAdmin') ): ?>
            <li class="nav-item">
                <a href="<?php echo e(route('users.index')); ?>" class="nav-link
                        <?php if($segment=='users'): ?>
                          active
                        <?php endif; ?>
                        ">
                  <i class="nav-icon fas fa-users-cog"></i>
                  <p>
                    User Management
                    
                  </p>
                </a>
          </li>
<?php endif; ?>
 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
                       <?php if($segment=='suppliers'): ?>
                          active
                        <?php endif; ?>
                        ">
              <i class="nav-icon fas fa-industry"></i>
              <p>
                Supplier Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('suppliers.index')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Suppliers</p>
                </a>
              </li>
              <?php if(Gate::check('isAdmin') ): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('suppliers.create')); ?>" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add Supplier</p>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </li>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
          <li class="nav-item">
                <a href="<?php echo e(route('categories.index')); ?>" class="nav-link
                        <?php if($segment=='categories'): ?>
                          active
                        <?php endif; ?>
                        ">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Product Categories
                    
                  </p>
                </a>
          </li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
                       <?php if($segment=='products'): ?>
                          active
                        <?php endif; ?>
                        ">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Product Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('products.index')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('products.create')); ?>" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
            </ul>
          </li>
<?php endif; ?>
         <!--Logout-->
            <li class="nav-item">
                <a href="<?php echo e(route('logout')); ?>" class="nav-link"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                >
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                </form>
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Log Out
                    
                  </p>
                </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- /. Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo e(asset('public/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('public/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('public/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo e(asset('public/plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('public/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('public/dist/js/adminlte.js')); ?>"></script>

<!-- page scripts -->
<!--Form upload-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php echo $__env->yieldContent('scripts'); ?>


</body>
</html><?php /**PATH E:\xampp\htdocs\rbc\resources\views/layouts/app.blade.php ENDPATH**/ ?>