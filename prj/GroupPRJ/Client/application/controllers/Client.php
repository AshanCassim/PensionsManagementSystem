<?php

class Client extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            $this->load->model('client_model');
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
    }

    public function signup(){

        $this->form_validation->set_rules('nic', 'NIC', 'is_unique[Pensioner.nic]');
        $this->form_validation->set_rules('nic', 'NIC', 'required');
        // $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run()==FALSE){
        //   print_r ($this->db->query('SELECT * FROM Pensioner')->result_array());
            $this->load->view('templates/header.php');
            $this->load->view('client/signup.php');
            $this->load->view('templates/footer.php');
        }
        else{
           if($this->client_model->register()){
            //    $this->load->view('client/successful');
            
            $this->login();
        }
        else{
            $this->load->view('templates/header.php');
            $this->load->view('client/signup.php');
            $this->load->view('templates/footer.php');
            echo 'Invalid Service Verification Code';
        }
    }
    
    
}

    public function login(){
        if(isset($_POST['nic'])){
            $data = array('nic'=>$_POST['nic'],'passwd'=>$_POST['password']);
            if($this->client_model->login($data)){
                // Start Session here
                $_SESSION['client'] = $data['nic'];
                redirect('client/profile');
            }
            else{
                $this->load->view('templates/header.php');
                $this->load->view('client/signup');
                $this->load->view('templates/footer.php');
                echo 'Wrong NIC Password Combination';
            }
        }
        else{
            $this->load->view('templates/header.php');
            $this->load->view('client/signup');
            $this->load->view('templates/footer.php');
        }
    }
    
    public function logout(){
        session_destroy();
        redirect('client/login');
    }
    
    public function profile(){
        $this->load->view('templates/header');
        $data=$this->client_model->loadinfo($_SESSION['client']);
        $this->load->view('client/profile',$data);
        $this->load->view('templates/footer');
        // print_r($data);
    }

}