<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {
    
    public function index()
    {
        $this->load->view('activity/plan');
    }
}