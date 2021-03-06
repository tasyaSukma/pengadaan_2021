<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/tambahAdmin" method="post" role="form">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/admin/tambah.blade.php ENDPATH**/ ?>