<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'buku' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-coins"></i>
            <span>Keuangan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/pemasukan/tampil_pemasukan') ?>">Data Pemasukan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/pengeluaran/tampil_pengeluaran') ?>">Data Pengeluaran</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/keuangan/laporan') ?>">Laporan Keuangan</a>
    
        </div>
    </li>
    
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'buku' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-book"></i>
            <span>Perkuliahan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/perkuliahan/matakuliah') ?>">Data Mata kuliah</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/perkuliahan/praktikum') ?>">Data Praktikum</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/perkuliahan/tugas') ?>">Data Tugas</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/perkuliahan/kegiatan') ?>">Data Kegiatan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/keuangan/laporan') ?>">Jadwal</a>
    
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>
