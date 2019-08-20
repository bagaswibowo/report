<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Plan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_LogActivity");
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data["activities"] = $this->M_LogActivity->getAll();
        $this->load->view('activity/V_plan', $data);
    }

    public function add()
    {
        $activity = $this->M_LogActivity;
        $validation = $this->form_validation;
        $validation = set_rules($activity->rules());

            if($validation->run()) {
                $activity->saveActivity();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    }

    public function acceptAct($id_activity = null)
    {
        if (!isset($id_activity)) redirect('/plan');
        if ($this->M_LogActivity->acceptActivity($id_activity)) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('/plan'));
        }
    }

    public function declineAct($id_activity = null)
    {
        if (!isset($id_activity)) redirect('/plan');
        if ($this->M_LogActivity->declineActivity($id_activity)) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('/plan'));
        }
    }
}