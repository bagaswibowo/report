<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Header -->
  <?php include 'application\views\includes\header.php'; ?>

  <title><?php echo SITE_NAME;?> - History Project</title>

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables/responsive.dataTables.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <?php require 'application\views\includes\sidebar.php' ?>
  <script>
        document.getElementById("historyproject").className += " active";
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
          <h1 class="h3 mb-2 text-gray-800">History Project</h1>
          <p class="mb-4">Daftar History Project</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">AM History Project Tables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="historyProjectDataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>AM</th>
                      <th>Project</th>
                      <th>Tahun</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Diskominfo Kab. Sleman</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>2018</td>
                      <td>
                        <a href="#" class="btn btn-info btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">See Detail</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Diskominfo Kab. Sleman</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>2018</td>
                      <td>
                        <a href="#" class="btn btn-info btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">See Detail</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Diskominfo Kab. Sleman</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>2018</td>
                      <td>
                        <a href="#" class="btn btn-info btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">See Detail</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Diskominfo Kab. Sleman</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>2018</td>
                      <td>
                        <a href="#" class="btn btn-info btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">See Detail</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Diskominfo Kab. Sleman</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>2018</td>
                      <td>
                        <a href="#" class="btn btn-info btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">See Detail</span>
                        </a>
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
  <script src="<?php echo base_url('assets/datatables/dataTables.responsive.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('js/datatables-historyproject.js')?>"></script>
  

</body>

</html>
<style type="text/css">
#historyProjectDataTable td:nth-child(5){
  text-align: center;
}
</style>