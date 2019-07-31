<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_HistoryProject extends CI_Controller {
    
    public function index()
    {
        $this->load->view('activity/V_historyproject');
    }
}