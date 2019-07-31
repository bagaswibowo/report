<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Intensitas extends CI_Controller {
    
    public function index()
    {
        $this->load->view('activity/V_intensitas');
    }
}