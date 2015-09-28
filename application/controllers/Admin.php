<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();


        if((!in_array($this->router->fetch_method(), ['login','logout'])) && (empty($this->session->userdata('admin_user')))) { 
            redirect(base_url('admin/login'));
            exit();
        }
    }

 
    public function login() {
        $data['error'] = '' ;
        if(!empty($this->session->userdata('admin_user'))) {
            redirect(base_url('admin'));
            exit();
        } else if (!empty($this->input->post('submit'))) {
            $this->load->model('admin_model');
            if($u = $this->admin_model->do_admin_Login($this->input->post(['username', 'password']))) {
                $this->session->set_userdata('admin_user',['id'=>$u[0]->id,'name'=>$u[0]->name,'img'=>$u[0]->img]);
                redirect(base_url('admin'));
                exit();
            } else {
                $data['error'] = 'The username or password does not match.' ;
            }
        }
        $this->load->view('admin_panel/login_view',$data);
    }

    public function index() {




        $data['view'] = 'index_view';
        $this->load->view('admin_panel/layout_admin',$data);
    }


    public function other() {


        $data['view'] = 'other_view';
        $this->load->view('admin_panel/layout_admin',$data);
    } 


    public function logout() { 
        $this->session->unset_userdata('admin_user');
        redirect(base_url('admin/login'));
        exit();
    }

}
