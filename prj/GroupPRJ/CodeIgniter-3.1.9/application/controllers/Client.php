<?php

class Client extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            $this->load->model('signup_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
    }

    public function signup(){

        $this->form_validation->set_rules('nic', 'NIC', 'is_unique[Pensioner.nic]');
        $this->form_validation->set_rules('nic', 'NIC', 'required');
        // $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run()==FALSE){
        //   print_r ($this->db->query('SELECT * FROM Pensioner')->result_array());

            $this->load->view('client/signup.php');
        }
        else{
           if($this->signup_model->register()){
            //    $this->load->view('client/successful');
               $login = array('nic'=>$_POST['nic'],'passwd'=>$_POST['password']);
               $this->login($login);
           }
           else{
               $this->load->view('client/signup.php');
               echo 'Invalid Service Verification Code';
           }
        }


    }

    public function login($data){
        print_r($data);
    }

}