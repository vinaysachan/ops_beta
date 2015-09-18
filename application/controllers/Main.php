<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
	$this->load->model('test_model');
	$r= $this->test_model->testing();
	
	print_r($r);
	$this->load->view('welcome_message');
    }

}
