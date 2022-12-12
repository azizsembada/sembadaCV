<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo App\Libraries\SembadaLib::get_site_logo(); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo App\Libraries\SembadaLib::get_site_name(); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo App\Libraries\SembadaLib::get_profile_picture(); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo App\Libraries\SembadaLib::get_profile_name(); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item <?php echo navItemDashboard($menu) ?>">
                    <a href="/panel-admin" class="nav-link <?php echo navLinkDashboard($menu) ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php echo navItemMainSkills($menu) ?>">
                    <a href="/main-skills" class="nav-link <?php echo navLinkMainSkills($menu) ?>">
                        <i class="nav-icon fa-solid fa-award"></i>
                        <p>
                            Kemampuan Utama
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php echo navItemServices($menu) ?>">
                    <a href="/services" class="nav-link <?php echo navLinkServices($menu) ?>">
                        <i class="nav-icon fa-solid fa-clipboard-list"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php echo navItemPortFolio($menu) ?>">
                    <a href="/portfolio" class="nav-link <?php echo navLinkPortfolio($menu) ?>">
                        <i class="nav-icon fa-solid fa-code"></i>
                        <p>
                            Portfolio
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php echo navItemSettings($menu) ?>">
                    <a href="#" class="nav-link <?php echo navLinkSettings($menu) ?>">
                        <i class="nav-icon fa-sharp fa-solid fa-wrench"></i>
                        <p>
                            Pengaturan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/settings" class="nav-link <?php echo navLinkWebsite($menu) ?>">
                                <i class="fa-solid fa-globe nav-icon"></i>
                                <p>Website</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/sub-title" class="nav-link <?php echo navLinkSubtitle($menu) ?>">
                                <i class="fa-solid fa-heading nav-icon"></i>
                                <p>Sub title</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user" class="nav-link <?php echo navLinkUser($menu) ?>">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#">
                        <i class="nav-icon fas fa-expand-arrows-alt"></i>
                        <p>
                            Layar Penuh
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>