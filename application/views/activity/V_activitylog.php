<!DOCTYPE html>
<html lang="en">

<head>

 <!-- Header -->
 <?php include 'application\views\includes\header.php'; ?>
 <title><?php echo SITE_NAME ?> - Detailed Log</title>
 
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'application\views\includes\sidebar.php' ?>
    <script>
        document.getElementById("activitylog").className += " active";
  </script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'application\views\includes\topbar.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Log</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="logDataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Instansi</th>
                      <th>Log</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Diskominfo Salatiga</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>12 Februari 2019
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Salatiga</td>
                      <td>Kirim jadwal pelatihan ke pak Eko
                        <br><br>
                          <div class='date-text'>06 Juni 2018
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Salatiga</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>05 Juni 2018
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Salatiga</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>12 Februari 2019
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Salatiga</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>12 Februari 2019
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Lubuk Linggau</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>12 Februari 2019
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Lubuk Linggau</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>12 Februari 2019
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diskominfo Lubuk Linggau</td>
                      <td>Kirim Proposal dan RAB Masterplan TIK dan DED FO
                        <br><br>
                          <div class='date-text'>12 Februari 2019
                          </div>
                      </td>
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
  <script src="<?php echo base_url('js/datatables-log.js')?>"></script>

</body>

</html>

<style Type='text/css'>
tr.group,
tr.group:hover {
    background-color: #eee !important;
    color: black;
}
.date-text{
  color: red;
}
</style>
