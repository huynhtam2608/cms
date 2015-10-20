<?php
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index($template = '') {
        $data               = array();
        $data['template']   = $template;
        $data['active']     = $template;
        $this->load->view('layouts/index', $data);
    }
}

