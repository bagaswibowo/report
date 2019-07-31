<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Overview extends CI_Controller {
      public function index() 
    {
        $this->load->view('admin/V_overview');
    }
}