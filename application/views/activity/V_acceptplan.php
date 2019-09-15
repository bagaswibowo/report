<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Header -->
  <?php $this->load->view("_includes/header.php") ?>
  
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables/responsive.dataTables.min.css')?>" rel="stylesheet">

</head>

<body id="page-top" onLoad="document.editform.note.focus();">

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
          <h1 class="h3 mb-2 text-gray-800">Accepting Plan</h1>
          <p class="mb-4">Buat laporan dengan menambahkan catatan.</p>

          <!-- Collapsable Card - Input Form -->
          <div class="card shadow mb-4">
                  <div class="card-body">
                    <form action="<?php echo base_url('activity/C_plan/accept/'.$activity->id_activity)?>" method="post" enctype="multipart/form-data" name="editform">
                    <div class="form-group ">
                      <label for="activityName">Activity Name</label>
                      <input type="text" class="form-control <?php echo form_error('activityName') ? 'is-invalid':'' ?>" id="activityName" name="activityName" placeholder="Enter activity name..." value="<?php echo $activity->activity?>">
                      <div class="invalid-feedback">
                        <?php echo form_error('activityName') ?>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="activityType">Type Activity</label>
                      <select class="form-control" id="activityType" name="activityType">
                        <option <?php echo ($activity->type == "Call") ? "selected" : "" ?>>Call</option>
                        <option <?php echo ($activity->type == "Email/Fax") ? "selected" : "" ?>>Email/Fax</option>
                        <option <?php echo ($activity->type == "Customer Meeting") ? "selected" : "" ?>>Customer Meeting</option>
                        <option <?php echo ($activity->type == "Visitaion") ? "selected" : "" ?>>Visitation</option>
                        <option <?php echo ($activity->type == "Product Presentation") ? "selected" : "" ?>>Product Presentation</option>
                        <option <?php echo ($activity->type == "Administration") ? "selected" : "" ?>>Administration</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="id_client">Customer Name</label>
                      <input type="text" class="form-control <?php echo form_error('id_client') ? 'is-invalid':'' ?>" id="id_client" name="id_client" placeholder="Enter customer name..." value="<?php echo $activity->id_client?>">
                      <div class="invalid-feedback">
                        <?php echo form_error('id_client') ?>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="stage">Stage</label>
                      <select class="form-control" id="stage" name="stage">
                        <option <?php echo ($activity->stage == "Open Prospect") ? "selected" : "" ?>>Open Prospect</option>
                        <option <?php echo ($activity->stage == "Prospecting Progress") ? "selected" : "" ?>>Prospecting Progress</option>
                        <option <?php echo ($activity->stage == "Closing Deal") ? "selected" : "" ?>>Closing Deal</option>
                        <option <?php echo ($activity->stage == "Fail") ? "selected" : "" ?>>Fail</option>
                        <option <?php echo ($activity->stage == "Project Progress") ? "selected" : "" ?>>Project Progress</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="note">Note</label>
                      <textarea class="form-control" id="note" name="note" rows="3"><?php echo $activity->note?></textarea>
                    </div>
                      <input class="btn btn-primary btn-user btn-block" type="submit" value="Accept and Submit">
                    </form>

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

  <!-- Modal-->
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