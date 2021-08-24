<!-- Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pengadaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/ubahPengadaan" method="post" role="form">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id_pengadaan" id="id_pengadaan" class="id_pengadaan">
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pengadaan</label>
              <input type="text" class="form-control nama_pengadaan" id="u_nama_pengadaan" name="u_nama_pengadaan" placeholder="Masukkan Nama Pengadaan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Deskripsi</label>
              <textarea type="text" class="form-control deskripsi" id="u_deskripsi" name="u_deskripsi" placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div class="form-group">
              <label>Anggaran <input type="" class="labelRp" disable style="border:none; background-color: white; color:black;"></label>
              <input type="text" class="form-control anggaran" id="u_anggaran" name="u_anggaran" placeholder="Masukkan Anggaran" onkeyup="currency()">
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
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/pengadaan/ubah.blade.php ENDPATH**/ ?>