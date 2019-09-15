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
                <div class="collapse <?php echo validation_errors() ? 'show':'' ?>" id="inputFormCard">
                  <div class="card-body">

                    <form action="<?php echo base_url('plan/add')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="activityName">Activity name *</label>
                      <input type="text" class="form-control <?php echo form_error('activityName') ? 'is-invalid':'' ?>" id="activityName" name="activityName" placeholder="Enter activity name...">
                      <div class="invalid-feedback">
                        <?php echo form_error('activityName') ?>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="activityType">Type Activity *</label>
                      <select class="form-control" id="activityType" name="activityType">
                        <option>Call</option>
                        <option>Email/Fax</option>
                        <option>Customer Meeting</option>
                        <option>Visitation</option>
                        <option>Product Presentation</option>
                        <option>Administration</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="id_client">Customer name</label>
                      <input type="text" class="form-control" id="id_client" name="id_client" placeholder="Enter customer name...">
                    </div>
                    <div class="form-group">
                    <label for="stage">Stage *</label>
                      <select class="form-control" id="stage" name="stage">
                        <option>Open Prospect</option>
                        <option>Prospecting Progress</option>
                        <option>Closing Deal</option>
                        <option>Fail</option>
                        <option>Project Progress</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="note">Note</label>
                      <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                      <div style="color: red">* Required</div>
                    </div>
                      <input class="btn btn-primary btn-user btn-block" type="submit" value="Submit">
                    </form>

                  </div>
                </div>
              </div>

              <?php if($this->session->flashdata('success')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
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
                      <td>
                        <button onclick="window.location.href ='<?php echo base_url('activity/C_plan/acceptAct/'.$activity->id_activity)?>';" class="btn btn-success btn-circle btn-sm <?php echo $activity->done == 'no' ? 'invisible' : '' ?>" <?php echo $activity->done == 'yes' ? 'disabled' : '' ?>>
                          <i class="fas fa-check"></i></button>
                        <button id="decBtn" href="#" data-toggle="modal" data-target="#confirmModal<?php echo $activity->id_activity?>" class="btn btn-danger btn-circle btn-sm <?php echo $activity->done == 'yes' ? 'invisible' : '' ?>" <?php echo $activity->done == 'no' ? 'disabled' : '' ?>>
                          <i class="fas fa-trash"></i></button>
                          <div class="modal fade" id="confirmModal<?php echo $activity->id_activity?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Caution!</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">Are you sure to Decline this activity?</div>
                                      <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" id="declineBtn" href="<?php echo site_url('activity/C_plan/declineAct/'.$activity->id_activity)?>">Yes</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                      </td>
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