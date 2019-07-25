<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intensitas extends CI_Controller {
    
    public function index()
    {
        $this->load->view('activity/intensitas');
    }
}