<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Header -->
  <?php include 'application\views\includes\header.php'; ?>
  
  <title><?php echo SITE_NAME;?> - Reporting</title>
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <?php require 'application\views\includes\sidebar.php' ?>
  <script>
        document.getElementById("report").className += " active";
  </script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'application\views\includes\topbar.php'; ?>

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
                      <th>Noted</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Sudah mendapatkan nomer bidang e-gov</td>
                      <td>17 Juni 2019</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Nomer kantor tidak tercantum di web. Sudah chat melakui DM IG tapi belum di respon</td>
                      <td>17 Juni 2019</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Nomer kantor tidak bisa dihubungi</td>
                      <td>17 Juni 2019</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Sudah mendapatkan nomer kabid kominfonya</td>
                      <td>18 Juni 2019</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Done</td>
                      <td>18 Juni 2019</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Nomer kantor tidak bisa dihubungi</td>
                      <td>18 Juni 2019</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>Nomor kantor tidak bisa dihubungi</td>
                      <td>19 Juni 2019</td>
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
      <?php include 'application\views\includes\footer.php';?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include 'application\views\includes\logout-modal.php';?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js')?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js')?>"></script>

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