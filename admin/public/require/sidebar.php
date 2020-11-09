<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../?mod=page&act=home">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">T.X.Trình <sup>UET</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="?mod=page&act=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trang chủ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Chức năng
      </div>
      <?php if($_SESSION['admin']['level'] == 1) { ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="?mod=employee">
          <i class="fas fa-fw fa-cog"></i>
          <span>Quản lí nhân viên</span>
        </a>
      </li>
      <?php } ?>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="?mod=customer">
          <i class="fas fa-fw fa-cog"></i>
          <span>Quản lí người dùng</span>
        </a>
      </li>

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="?mod=order">
          <i class="fas fa-fw fa-cog"></i>
          <span>Quản lí đơn hàng</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="?mod=product">
          <i class="fas fa-fw fa-cog"></i>
          <span>Quản lí hàng hóa</span>
        </a>
      </li>

    </ul>