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
      <?php echo $__env->make('admin.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Sidebar Menu -->
      <?php echo $__env->make('parsial.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <h1>Pengajuan</h1>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengajuan</h3>
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
                      <th>Nama Pengadaan</th>
                      <th>Gambar</th>
                      <th>Anggaran (IDR) </th>
                      <th>Proposal</th>
                      <th>Anggaran Pengajuan (IDR)</th>
                      <th>Supplier</th>                      
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Status Pengajuan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $pengajuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($p['nama_pengadaan']); ?></td>
                      <td><img style="width:15%;" src="<?php echo e(asset(Storage::url($p['gambar']))); ?>"></td>
                      <td><span class="tag tag-success"><?php echo e(number_format($p['anggaran_pengadaan'],0,",",".")); ?></span></td>
                      <td><a target="_blank" href="<?php echo e(asset(Storage::url($p['proposal']))); ?>" class="btn btn-primary">Lihat Detail</a></td>
                      <td><span class="tag tag-success"><?php echo e(number_format($p['anggaran_pengajuan'],0,",",".")); ?></span></td>
                      <td><?php echo e($p['nama_supplier']); ?></td>
                      <td><?php echo e($p['email_supplier']); ?></td>
                      <td><?php echo e($p['alamat_supplier']); ?></td>
                      <td>
                        <?php if($p['status_pengajuan'] == "1"): ?>
                        <a href="/terimaPengajuan/<?php echo e($p['id_pengajuan']); ?>" class="btn btn-secondary konfirmasi"><i class="fas fa-check"> Terima</i></a>
                        <a href="/tolakPengajuan/<?php echo e($p['id_pengajuan']); ?>" class="btn btn-danger konfirmasi"><i class="fas fa-times"></i> Tolak</a>
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
  <?php echo $__env->make('parsial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

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

<script type="text/javascript">
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
  });

  $(document).on("click",".konfirmasi", function(event){
    event.preventDefault();
    const url= $(this).attr('href');

    var answer = window.confirm("Kamu yakin akan memroses data ini?");

    if(answer){
      window.location.href = url;
    }else{

    }
  });
</script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/pengajuan/list.blade.php ENDPATH**/ ?>