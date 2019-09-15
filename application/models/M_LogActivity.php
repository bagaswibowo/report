<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_LogActivity extends CI_Model {
    private $_table = "tb_log_activity";

    public $id_activity, $id_client, $id_am, $waktu, $activity, $type, $stage, $note;
    public $done = "unset";

    public function rules() {
        return [

            ['field' => 'activityName',
            'label' => 'activity name',
            'rules' => 'required']
            
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getAcceptedAct()
    {
        return $this->db->get_where($this->_table, ["done" => 'yes'])->result();
    }

    public function saveActivity()
    {
        $post = $this->input->post();
        $this->id_am = 1;
        $this->id_client = $post["id_client"];
        $this->activity = $post["activityName"];
        $this->type = $post["activityType"];
        $this->stage = $post["stage"];
        $this->note = $post["note"];
        $this->waktu = date("d F Y");
        $this->db->insert($this->_table, $this);

    }

    public function acceptActivity($id_activity)
    {  
        $tb = "tb_log_activity";
        $post = $this->input->post();
        $id_client = $post["id_client"];
        $activity = $post["activityName"];
        $type = $post["activityType"];
        $stage = $post["stage"];
        $note = $post["note"];
        $query = "UPDATE $tb SET `activity`='$activity', `type`='$type', `stage`='$stage', `note`='$note', `id_client`='$id_client', `done`='yes' WHERE `id_activity`='$id_activity' ";
        $this->db->query($query);
        return true;
    }

    public function declineActivity($id_activity)
    {
        $tb = "tb_log_activity";
        $query = "UPDATE $tb SET done='no' WHERE id_activity=$id_activity";
        $this->db->query($query);
        return true;
    }

    public function getActivityCount()
    {
        //get intensitas kontek seko kene bos
    }

    public function getActByID($id_activity)
    {
        return $this->db->get_where($this->_table, ["id_activity" => $id_activity])->row();
    }

}