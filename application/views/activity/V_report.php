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
          <h1 class="h3 mb-2 text-gray-800">Report</h1>
          <p class="mb-4">Berisikan laporan dari daftar rencana yang berhasil dikerjakan.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="reportDataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Activity</th>
                      <th>Type Activity</th>
                      <th>Customer Name</th>
                      <th>Stage</th>
                      <th>Note</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $number = 1;
                      foreach ($activities as $activity): 
                      ?>
                    <tr>
                      <td><?php echo $number ?></td>
                      <td><?php echo $activity->activity ?></td>
                      <td><?php echo $activity->type ?></td>
                      <td><?php echo $activity->id_client ?></td>
                      <td><?php echo $activity->stage ?></td>
                      <td><?php echo $activity->note ?></td>
                      <td><?php echo $activity->waktu ?></td>
                    </tr>
                    <?php $number++; endforeach; ?>
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
  <script src="<?php echo base_url('js/datatables-report.js')?>"></script>

</body>

</html>

<style Type='text/css'>
tr.group,
tr.group:hover {
    background-color: #eee !important;
}
</style>