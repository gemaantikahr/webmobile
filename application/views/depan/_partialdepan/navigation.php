<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Nama Mahasiswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Perkuliahan
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('admin/depan/perkuliahan/tampil_jadwal_kuliah')?>">Jadwal Kuliah</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/depan/perkuliahan/tampil_jadwal_tugas')?>">Jadwal Tugas</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/depan/perkuliahan/tampil_jadwal_kegiatan')?>">Jadwal Kegiatan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/perkuliahan/matakuliah/lihat_presensi') ?>">Lihat presensi</a>
          </div>
      </li>
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Keuangan
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('admin/pemasukan/tampil_pemasukan')?>">Transaksi Masuk</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/pengeluaran/tampil_pengeluaran')?>">Transaksi Keluar</a>
          </div>
      </li> -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Situs
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="https://portal.uad.ac.id/">PORTAL</a>
            <a class="dropdown-item" href="https://tif.uad.ac.id/">TIF</a>
            <a class="dropdown-item" href="https://hm.tif.uad.ac.id/">HMTIF</a>
            <a class="dropdown-item" href="https://bimawa.uad.ac.id/">BIMAWA</a>
            <a class="dropdown-item" href="https://simeru.uad.ac.id/">SIMERU</a>
          </div>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin')?>">Kelola</a>
      </li>    
    </ul>
  </div>  
</nav>
