<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Header -->
  <?php $this->load->view("_includes/header.php") ?>

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables/responsive.dataTables.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <?php $this->load->view("_includes/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("_includes/topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Prospect</h1>
          <p class="mb-4">Daftar Prospect</p>
        
        <!-- Content Row -->
        <div class="row">

        <!-- Revenue Card-->
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Revenue</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Est Gross Card-->
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Est. Gross Profit</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">AM Prospect Tables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="projectDataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>AM</th>
                      <th>Account</th>
                      <th>Project</th>
                      <th>Revenue</th>
                      <th>Est. Gross</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("_includes/footer.php") ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("_includes/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("_includes/modal.php") ?>

  <!-- JS -->
  <?php $this->load->view("_includes/js.php") ?>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.responsive.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('js/datatables-prospect.js')?>"></script>

</body>

</html>