<?php

class Application extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('application_model');
        $this->load->helper('url_helper');
    }

    public function submit(){
        if($this->application_model->save()){
            redirect('client/profile');
            echo 'Successfully Updated';
        }
        else{
            echo 'error';
        }
    }
}

?>