<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengadaan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('/adminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/adminLTE/dist/css/adminlte.min.css')); ?>">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo e(asset('/adminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo e(asset('/adminLTE/plugins/toastr/toastr.min.css')); ?>">

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
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <?php echo $__env->make('parsial.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <?php echo $__env->make('admin.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
      <!-- Sidebar Menu -->
      <?php echo $__env->make('parsial.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Data Supplier</h1>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="text-right mb-2">
               <button type="button" class="btn btn-primary" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
            </div>
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Supplier</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Usaha</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>No NPWP</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($sup->nama_usaha); ?></td>
                      <td><?php echo e($sup->email); ?></td>
                      <td><?php echo e($sup->alamat); ?></td>
                      <td><?php echo e($sup->no_npwp); ?></td>
                      <td>
                        <?php if($sup->status == 0): ?>
                        <a href="/Aktif/<?php echo e($sup->id_supplier); ?>" class="btn btn-success konfirmasi"><i class="fa fa-check"></i> Verifikasi</a>
                        <?php else: ?>
                        <a href="/nonAktif/<?php echo e($sup->id_supplier); ?>" class="btn btn-danger konfirmasi"><i class="fa fa-times"></i> Non Aktif</a>
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $__env->make('parsial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.ubah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('/adminLTE/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/adminLTE/dist/js/adminlte.min.js')); ?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo e(asset('/adminLTE/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!-- Toastr -->
<script src="<?php echo e(asset('/adminLTE/plugins/toastr/toastr.min.js')); ?>"></script>

<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    <?php if(\Session::has('berhasil')): ?>
    Toast.fire({
        icon: 'success',
        title: '<?php echo e(Session::get('berhasil')); ?>'
      })
    <?php endif; ?>

    <?php if(\Session::has('gagal')): ?>
    Toast.fire({
        icon: 'error',
        title: '<?php echo e(Session::get('gagal')); ?>'
      })
    <?php endif; ?>

    <?php if(count($errors) > 0): ?>
    Toast.fire({
        icon: 'error',
        title: '<ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>'
    })    
    <?php endif; ?>
  });

  $(document).on("click", ".ubah", function(){
    var nama_usaha =  $(this).data('nama_usaha');
    var email = $(this).data('email');
    var alamat = $(this).data('alamat');
    var no_npwp = $(this).data('no_npwp');
    var id_supplier = $(this).data('id_supplier');

    $(".nama").val(nama);
    $(".email").val(email);
    $(".alamat").val(alamat);
    $(".no_npwp").val(no_nppwp);
    $(".id_admin").val(id_admin);
  });

  $(document).on("click",".konfirmasi", function(event){
    event.preventDefault();
    const url= $(this).attr('href');

    var answer = window.confirm("Kamu yakin ingin memroses data ini?");

    if(answer){
      window.location.href = url;
    }else{

    }
  });
</script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/admin/listSup.blade.php ENDPATH**/ ?>