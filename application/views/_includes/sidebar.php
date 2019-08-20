<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('./dashboard')?>">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-at"></i>
  </div>
  <div class="sidebar-brand-text mx-3"><?php echo SITE_NAME ?></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class='nav-item <?php echo $this->uri->segment(1) == 'dashboard' ? 'active': '' ?>'>
  <a class="nav-link" href="<?php echo base_url('./dashboard')?>">
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
<li class="nav-item <?php echo $this->uri->segment(1) == 'plan' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./plan')?>">
    <i class="fas fa-fw fa-list"></i>
    <span>Plan</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item <?php echo $this->uri->segment(1) == 'report' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./report')?>">
    <i class="fas fa-fw fa-list-alt"></i>
    <span>Report</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item <?php echo $this->uri->segment(1) == 'intensitas' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./intensitas')?>">
    <i class="fas fa-fw fa-chart-bar"></i>
    <span>Intensitas Kontak</span></a>
</li>

<!-- Nav Item - Activity Log -->
<li class="nav-item <?php echo $this->uri->segment(1) == 'logActivity' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./logActivity')?>">
    <i class="far fa-fw fa-address-book"></i>
    <span>Log</span></a>
</li>

<!-- Nav Item - Prospect -->
<li class="nav-item <?php echo $this->uri->segment(1) == 'prospect' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./prospect')?>">
    <i class="fas fa-fw fa-chart-line"></i>
    <span>Prospect</span></a>
</li>

<!-- Nav Item - Project -->
<li class="nav-item <?php echo $this->uri->segment(1) == 'project' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./project')?>">
    <i class="fas fa-fw fa-project-diagram"></i>
    <span>Project</span></a>
</li>

<!-- Nav Item - History Project -->
<li class="nav-item <?php echo $this->uri->segment(1) == 'history-Project' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo base_url('./history-Project')?>">
    <i class="fas fa-fw fa-chart-line"></i>
    <span>History Project</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->