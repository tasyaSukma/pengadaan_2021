<nav id="navbar" class="navbar">
<ul>
  <li><a class="nav-link scrollto active" href="/">Home</a></li>
  <?php if($token == "kosong"): ?>
  <li><a class="nav-link scrollto" href="/login">Login</a></li>
  <li><a class="getstarted scrollto" href="/registrasi">Daftar</a></li>
  <?php else: ?>
  <li><a class="nav-link scrollto" href="/listSupplier">Pengajuan</a></li>
  <li><a class="nav-link scrollto" href="/keluarSupplier">Logout</a></li>
  <?php endif; ?>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar --><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/utama/menu.blade.php ENDPATH**/ ?>