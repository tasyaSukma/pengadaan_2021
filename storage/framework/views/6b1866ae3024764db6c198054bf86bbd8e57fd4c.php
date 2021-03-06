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
              <h1>List Data Pengadaan</h1>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pengadaanModal"><i class="fas fa-plus"></i> Tambah Data</button>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Pengadaan</h3>

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
                    <table style="text-align: center;" class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Nama Pengadaan</th>
                          <th>Deskripsi</th>
                          <th>Gambar</th>
                          <th>Anggaran</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $pengadaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pgd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($pgd->nama_pengadaan); ?></td>
                          <td><a target="_blank" href="<?php echo e($pgd->deskripsi); ?>"><button class="btn btn-primary">Lihat Detail</button></a></td>
                          <td>
                            <?php if($pgd->gambar !="-"): ?>
                            <img style="width:15%;" src="<?php echo e(asset(Storage::url($pgd->gambar))); ?>">
                            <hr>
                            <a class="konfirmasi" href="/hapusGambar/<?php echo e($pgd->id_pengadaan); ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                              <?php endif; ?>
                              <?php if($pgd->gambar == "-"): ?>
                              <hr>
                              <form method="post" action="/uploadGambar" enctype="multipart/form-data" role="form">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="id_pengadaan" id="id_pengadaan" value="<?php echo e($pgd->id_pengadaan); ?>">
                                <label for="gambar" class="btn btn-block btn-outline-info btn-flat">Gambar Pengadaan</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" style="display: none;">
                                <button type="submit" class="btn btn-primary">Upload</button>
                              </form>
                              <?php endif; ?>
                            </td>

                            <td><span class="tag tag-success"><?php echo e(number_format($pgd->anggaran,0,",",".")); ?></span></td>
                            <td>
                              <a class="konfirmasi" href="/hapusPengadaan/<?php echo e($pgd->id_pengadaan); ?>">
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash">Hapus</i></button>
                              </a>
                              <button class="btn btn-secondary ubah" data-toggle="modal" data-target="#ubahModal" data-nama_pengadaan="<?php echo e($pgd->nama_pengadaan); ?>" data-deskripsi="<?php echo e($pgd->deskripsi); ?>" data-anggaran="<?php echo e($pgd->anggaran); ?>" data-id_pengadaan="<?php echo e($pgd->id_pengadaan); ?>"><i class="fas fa-edit">Ubah</i></button>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="d-flex justify-content-center"><?php echo e($pengadaan->links()); ?></div>
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
        <?php echo $__env->make('pengadaan.ubah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <?php echo $__env->make('pengadaan.tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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
        function currency(){
          var input = document.getElementById("anggaran");
          $(".labelRp").val(formatRupiah(input.value));
        }

        function currency(){
          var input = document.getElementById("u_anggaran");
          $(".labelRp").val(formatRupiah(input.value));
        }

        function formatRupiah(angka,prefix){
          var number_string = angka.replace(/[^,\d],/g, '').toString(),
          split   = number_string.split(','),
          sisa    = split[0].length%3,
          rupiah  = split[0].substr(0,sisa),
          ribuan  = split[0].substr(sisa).match(/\d{3}/gi);

          if(ribuan){
            separator = sisa?'.' : '';
            rupiah += separator + ribuan.join('.');
          }

          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '')
        }

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

          var answer = window.confirm("Kamu yakin akan menghapus data ini?");

          if(answer){
            window.location.href = url;
          }else{

          }
        });

        $(document).on("click", ".ubah", function(){
          var nama_pengadaan =  $(this).data('nama_pengadaan');
          var deskripsi = $(this).data('deskripsi');
          var anggaran = $(this).data('anggaran');
          var id_pengadaan = $(this).data('id_pengadaan');

          $(".nama_pengadaan").val(nama_pengadaan);
          $(".deskripsi").val(deskripsi);
          $(".anggaran").val(anggaran);
          $(".id_pengadaan").val(id_pengadaan);
        });
      </script>
    </body>
    </html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/pengadaan/list.blade.php ENDPATH**/ ?>