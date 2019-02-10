    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('admin/home/')?>">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                  <li class="dropdown">
                    <a class="dropdown-toggle nav-link py-3 px-0 px-lg-3 text-light" data-toggle="dropdown" href="#">Keuangan</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item mx-0 mx-lg-1"><a href="<?php echo site_url('admin/keuangan/pengeluaran/tampil_pengeluaran_depan')?>">Pengeluaran</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a href="#">Pemasukan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a href="#">Laporan</a></li>
                      </ul>
                  </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('admin/')?>">Admin</a>
              </li>


            <!--
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
            -->
          </ul>
        </div>
      </div>
    </nav>