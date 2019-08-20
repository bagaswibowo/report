<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_LogActivity extends CI_Model {
    private $_table = "tb_log_activity";

    public $id_activity, $id_client, $id_am, $waktu, $activity, $type, $stage, $note;
    public $done = "unset";

    public function rules() {
        return [

            ['field' => 'id_client',
            'label' => 'ID Client',
            'rules' => 'required'],

            ['field' => 'activity',
            'label' => 'Activity',
            'rules' => 'required'],

            ['field' => 'type',
            'label' => 'Activity Type',
            'rules' => 'required'],

            ['field' => 'stage',
            'label' => 'Stage',
            'rules' => 'required'],
            
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getAcceptedAct()
    {
        return $this->db->get($this->_table, array('done' => 'yes'));
    }

    public function saveActivity()
    {
        $post = $this->input->post();
        $this->id_activity = uniqid();
        $this->id_am = $_SESSION["id_am"];
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
        $post = $this->input->post();
        $this->done = "yes";
        $this->note = $post["note"];
        $this->db->update($this->_table, $this, array('id_actitivy' => $post["id_activity"]));
    }

    public function declineActivity($id_activity)
    {
        $post = $this->input->post();
        $this->done = "no";
        $this->db->update($this->_table, $this, array('id_actitivy' => $post["id_activity"]));
    }

    public function getActivityCount()
    {
        //get intensitas kontek seko kene bos
    }

}