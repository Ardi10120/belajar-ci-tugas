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

  <li class="nav-item">
  <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
      <i class="bi bi-info"></i>
      <span>FAQ</span>
    </a>
  </li><!-- End Dashboard Nav -->

</ul>

</aside><!-- End Sidebar-->