<?php

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->model('auth_model');
        $this->load->helper('form');

    }

    public function login(){
        if(isset($_POST['username'])){
            $data = array('username'=>$_POST['username'],'passwd'=>$_POST['password']);
                if($this->auth_model->login($data)){
                    // Start Session here
                    $this->session->authentication = $data['username'];
                    redirect(site_url('/dashboard'));
                }  
                else{
                    $this->load->view('pages/login');
                    echo 'Wrong NIC Password Combination';
                }
        }
        else{
            $this->load->view('pages/login');
          
        }

     

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('/dashboard'));
    }


    



}?>