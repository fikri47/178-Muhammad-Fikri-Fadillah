<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src={{asset("image/e-mebel-high-resolution-logo.svg")}} alt="E-MEBEL LOGO" class="brand-image img-circle elevation-3" style="opacity: .9">
    <span class="brand-text font-weight-light">E-MEBEL</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src={{asset("image/logo-black.svg")}} class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Welcome! Admin</a>
      </div>
    </div>    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard                
            </p>
          </a>            
        </li>
       
        <li class="nav-item">
          <a href="/produk" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Produk                
            </p>
          </a>            
        </li>
        <li class="nav-item">
          <a href="/pemesanan" class="nav-link">
            <i class="nav-icon fas fa-shopping-basket"></i>
            <p>
              Pemesanan                
            </p>
          </a>            
        </li>
        <li class="nav-item">
          <a href="/surat" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Surat Jalan
            </p>
          </a>            
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>