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
          <h1 class="h3 mb-2 text-gray-800">Plan</h1>
          <p class="mb-4">Daftar rencana yang akan dikerjakan.</p>

          <!-- Collapsable Card - Input Form -->
          <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#inputFormCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Input Plan Form</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="inputFormCard">
                  <div class="card-body">                   
                    <form>
                    <div class="form-group">
                      <label for="actName">Activity Name</label>
                      <input type="text" class="form-control form-control-user" id="actName" placeholder="Enter activity name...">
                    </div>
                    <div class="form-group">
                    <label for="actType">Type Activity</label>
                      <select class="form-control" id="actType">
                        <option>Call</option>
                        <option>Email/Fax</option>
                        <option>Customer Meeting</option>
                        <option>Visitation</option>
                        <option>Product Presentation</option>
                        <option>Administration</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cusName">Customer Name</label>
                      <input type="text" class="form-control form-control-user" id="cusName" placeholder="Enter customer name...">
                    </div>
                    <div class="form-group">
                    <label for="stage">Stage</label>
                      <select class="form-control" id="stage">
                        <option>Open Prospect</option>
                        <option>Prospecting Progress</option>
                        <option>Closing Deal</option>
                        <option>Fail</option>
                        <option>Project Progress</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="note">Note</label>
                      <textarea class="form-control" id="note" rows="3"></textarea>
                    </div>

                      <a href="<?php echo base_url('index.php/admin')?>" class="btn btn-primary btn-user btn-block">
                        Submit
                      </a>
                    </form>

                  </div>
                </div>
              </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">AM Planning Tables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="planDataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Activity</th>
                      <th>Type Activity</th>
                      <th>Customer Name</th>
                      <th>Stage</th>
                      <th>Noted</th>
                      <th>Date</th>
                      <th>Status</th>
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
                      <td>17 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      <td>17 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      <td>17 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      <td>18 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      <td>18 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      <td>18 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Cari kontak diskominfo Lubuk Linggau</td>
                      <td>Call</td>
                      <td>Diskominfo Kab.</td>
                      <td>Open Prospect</td>
                      <td>........................................</td>
                      <td>19 Juni 2019</td>
                      <td><a href="#" class="btn btn-success btn-circle btn-sm">
                          <i class="fas fa-check"></i></a>
                          <a href="#" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i></a></td>
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
  <script src="<?php echo base_url('js/datatables-plan.js')?>"></script>

</body>

</html>

<style Type='text/css'>
tr.group,
tr.group:hover {
    background-color: #eee !important;
}
</style>