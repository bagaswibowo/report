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
        $validation->set_rules($activity->rules());

        if ($validation->run()) {
                $activity->saveActivity();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

        $data["activities"] = $this->M_LogActivity->getAll();
        $this->load->view('activity/V_plan', $data);
    }

    public function acceptAct($id_activity = null)
    {
        $data['activity'] = $this->M_LogActivity->getActByID($id_activity);
        $this->load->view('activity/V_acceptplan', $data);
        if (!isset($id_activity)) redirect('/plan');
    }

    public function accept($id_activity = null)
    {
        $validation = $this->form_validation;
        $validation->set_rules($this->M_LogActivity->rules());
        if ($validation->run()) {
            if ($this->M_LogActivity->acceptActivity($id_activity)) {
                redirect(site_url('/plan'));
            }
        }
        $data["activity"] = $this->M_LogActivity->getActByID($id_activity);
        $this->load->view('activity/V_acceptplan', $data);
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