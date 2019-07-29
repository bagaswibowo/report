<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/admin')?>">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3"><?php echo SITE_NAME ?></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class='nav-item' id='dashboard'>
  <a class="nav-link" href="<?php echo base_url('index.php/admin')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Menu
</div>

<!-- Nav Item - Tables -->
<li class='nav-item' id='plan'>
  <a class="nav-link" href="./plan">
    <i class="fas fa-fw fa-list"></i>
    <span>Plan</span></a>
</li>

<!-- Nav Item - Tables -->
<li class='nav-item' id='report'>
  <a class="nav-link" href="./report">
    <i class="fas fa-fw fa-list-alt"></i>
    <span>Report</span></a>
</li>

<!-- Nav Item - Charts -->
<li class='nav-item' id='intensitas'>
  <a class="nav-link" href="./intensitas">
    <i class="fas fa-fw fa-chart-bar"></i>
    <span>Intensitas Kontak</span></a>
</li>

<!-- Nav Item - Activity Log -->
<li class='nav-item' id='activitylog'>
  <a class="nav-link" href="./activitylog">
    <i class="far fa-fw fa-address-book"></i>
    <span>Log</span></a>
</li>

<!-- Nav Item - Project -->
<li class='nav-item' id='project'>
  <a class="nav-link" href="./project">
    <i class="fas fa-fw fa-project-diagram"></i>
    <span>Project</span></a>
</li>

<!-- Nav Item - Prospect -->
<li class='nav-item' id='prospect'>
  <a class="nav-link" href="./prospect">
    <i class="fas fa-fw fa-chart-line"></i>
    <span>Prospect</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->