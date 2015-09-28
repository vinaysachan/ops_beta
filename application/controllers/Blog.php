<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        echo 'Blog Index Page';
    }

    public function view(){
        
        echo 'View Page' ;
        
         $this->load->view('blog/view');
    }
}
