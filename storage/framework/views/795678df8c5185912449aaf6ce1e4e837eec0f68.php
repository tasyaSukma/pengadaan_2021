<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('adminLTE/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
      <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
<?php endif; ?>
<?php if(\Session::has('berhasil')): ?>
<div class="alert alert-success" role="alert">
  <?php echo e(Session::get('berhasil')); ?>

</div>
<?php endif; ?>

<?php if(\Session::has('gagal')): ?>
<div class="alert alert-danger" role="alert">
  <?php echo e(Session::get('gagal')); ?>

</div>
<?php endif; ?>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo e(asset('adminLTE/index2.html')); ?>" class="h1"><b>Pengadaan</b>App</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan masuk sebagai admin</p>

      <form action="/masukAdmin" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="input-group mb-3">
          <input type="email" name='email' id='email' class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='password' id='password' class="form-control" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(asset('adminLTE//plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('adminLTE//plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminLTE/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/admin/login.blade.php ENDPATH**/ ?>