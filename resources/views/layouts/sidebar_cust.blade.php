<aside class="main-sidebar sidebar-dark-primary bg-black elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ajeng Tyas W</a>
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
                <a href="/dashboard_cust" class="nav-link {{ ($title === "Dashboard Konsumen")  ? 'active' : ''}}">
                  <i class="fa-solid fa-house-laptop"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
            <li class="nav-item menu-open">
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/story" class="nav-link {{ ($title === "Stories")  ? 'active' : ''}}">
                        <i class="fa-solid fa-store"></i>
                      <p>Stories </p>
                    </a>
                  </li>
                </ul>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/data_jasa" class="nav-link {{ ($title === "Data Jasa Service")  ? 'active' : ''}}">
                            <i class="fa-solid fa-layer-group"></i>
                          <p>Data Service</p>
                        </a>
                      </li>
                    </ul>
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/data_sparepart" class="nav-link {{ ($title === "Data Sparepart")  ? 'active' : ''}}">
                                <i class="fa-solid fa-toolbox"></i>
                              <p>Data Sparepart</p>
                            </a>
                          </li>
                        </ul>
            
            
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
