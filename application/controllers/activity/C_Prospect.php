<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Prospect extends CI_Controller {

    public function index()
    {
        $this->load->view('activity/V_prospect');
    }
}