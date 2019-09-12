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