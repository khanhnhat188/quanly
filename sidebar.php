<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

<!-- Brand Logo Light -->
<a href="index.php" class="logo logo-light">
    <span class="logo-lg">
        <img src="assets/images/logo.png" alt="logo">
    </span>
    <span class="logo-sm">
        <img src="assets/images/logo-sm.png" alt="small logo">
    </span>
</a>

<!-- Brand Logo Dark -->
<a href="index.php" class="logo logo-dark">
    <span class="logo-lg">
        <img src="assets/images/logo-dark.png" alt="dark logo">
    </span>
    <span class="logo-sm">
        <img src="assets/images/logo-sm.png" alt="small logo">
    </span>
</a>

<!-- Sidebar -left -->
<div class="h-100" id="leftside-menu-container" data-simplebar>
    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title">Main</li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                <i class="ri-group-2-line"></i>
                <span> Authentication </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarPagesAuth">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="auth-login.html">Login</a>
                    </li>
                    <li>
                        <a href="auth-register.html">Register</a>
                    </li>
                    <li>
                        <a href="auth-logout.html">Logout</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                <i class="ri-survey-line"></i>
                <span> Phòng ban </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarForms">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="index.php?action=department&query=add">Thêm phòng ban</a>
                    </li>
                    <li>
                        <a href="index.php?action=department&query=list">Danh sách phòng ban</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                <i class="ri-table-line"></i>
                <span> Nhân viên </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTables">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="index.php?action=employee&query=add">Thêm nhân viên</a>
                    </li>
                    <li>
                        <a href="index.php?action=employee&query=list">Danh sách nhân viên</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!--- End Sidemenu -->

    <div class="clearfix"></div>
</div>
</div>
<!-- ========== Left Sidebar End ========== -->