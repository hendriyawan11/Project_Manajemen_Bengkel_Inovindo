<aside class="main-sidebar sidebar-dark-primary bg-black elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hendriyawan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="fa-solid fa-house-laptop"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="fa-solid fa-handshake"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/order_sparepart" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Spareparts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/order_jasa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Jasa Service</p>
                </a>
              </li>
            </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                 <i class="fa-solid fa-gear"></i>
                <p>
                  Spareparts
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/pembelian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembelian</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/semua_sparepart" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Semua Spareparts</p>
                  </a>
                </li>
              </ul>
              </li>
            <li class="nav-item">
            <a href="/servis" class="nav-link">
            <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>
                Service
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="/mekanik" class="nav-link">
              <i class="fa-solid fa-user-gear"></i>
              <p>
               Mekanik
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="/laporan" class="nav-link">
             <i class="fa-solid fa-book-bookmark"></i>
              <p>
                Laporan
              </p>
            </a>
            </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
