<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class biblioteca extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'exemplo'; 
            $this->load->view('welcome_message');
        
            
    }

}
