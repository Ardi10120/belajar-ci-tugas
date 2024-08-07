<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
        <i class="bi bi-cart"></i>
        <span>Keranjang</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
        <i class="bi bi-book"></i>
        <span>Produk</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <?php
    if (session()->role == 'admin') {
      ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'transaksi') ? "" : "collapsed" ?>" href="transaksi">
          <i class="bi bi-wallet"></i>
          <span>Transaksi</span>
        </a>
      </li>
      <?php
    }
    ?><!-- End Profile Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
        <i class="bi bi-info"></i>
        <span>FAQ</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'contact') ? "" : "collapsed" ?>" href="#">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Dashboard Nav -->


  </ul>

</aside><!-- End Sidebar-->