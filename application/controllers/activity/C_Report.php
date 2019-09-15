<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Report extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_LogActivity");
    }

    public function index()
    {
        $data["activities"] = $this->M_LogActivity->getAcceptedAct();
        $this->load->view('activity/V_report', $data);
    }
}