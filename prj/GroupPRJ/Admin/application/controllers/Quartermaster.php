<?php

class Quartermaster extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
			$this->load->database();
			$this->load->helper('url_helper');
			$this->load->model('newapplicant');
			$this->load->model('pendingapplicant');
			$this->load->model('mail');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
    }
	public function new()
	{
		$data = array('newlist'=>$this->newapplicant->getnew('*'));
		$this->form_validation->set_rules('nic', 'NIC', 'is_unique[Pensioner.nic]');
		$this->form_validation->set_rules('nic', 'NIC', 'required');

		if ($this->form_validation->run()==FALSE){
			if(isset($_SESSION['authentication'])){
				$this->load->view('pages/dash/newapplicant.php',$data);
			}
			else{
			
				$this->load->view('pages/login',$data);
			}
		}
		else{
			$this->newapplicant->save();
			$data = array('newlist'=>$this->newapplicant->getnew('*'));
			if(isset($_SESSION['authentication'])){
				
				$this->load->view('pages/dash/newapplicant.php',$data);
			}
			else{
				$this->load->view('pages/login',$data);
			}
		}
	}

	public function pending(){
		$data = array('pendinglist'=>$this->pendingapplicant->getpending('*'));
		if(isset($_SESSION['authentication'])){
			$this->load->view('pages/dash/pending.php',$data);
		}
		else{
			$this->load->view('pages/login',$data);
		}
	}

	public function view($nic=0){

		$data = $this->pendingapplicant->loadinfo($nic);
		if(isset($_SESSION['authentication'])){
			$this->load->view('pages/dash/view',$data);
		}
		else{
			$this->load->view('pages/login',$data);
		}
	}

	public function submit(){
		if(null!==($this->input->post('approve'))){
			$this->approve();
		}
		else{
			$this->revise();
		}
	}
	
	public function revise(){
		$this->pendingapplicant->clearrevision($_POST['nic']);
		$payload=(explode("," , $this->input->post('payload')));
		foreach ($payload as $field){
			$data= array('nic'=>$_POST['nic'],'field'=> $field);
			$this->pendingapplicant->revise($data);
		}
		if(strlen($_POST['msgbody'])>0){
			$data = array('nic'=>$_POST['nic'],'subject'=>'Application Review','body'=>$_POST['msgbody']);
			$this->mail->sendmail($data);
		}

		redirect('quartermaster/pending');

	}
	public function approve(){
		$this->pendingapplicant->clearrevision($_POST['nic']);
		$this->pendingapplicant->approve($_POST['nic']);
		$data = array('nic'=>$_POST['nic'],'subject'=>'Application Approved','body'=>'
		Congratulations! Your Application has been approved');
		$this->mail->sendmail($data);
		redirect('quartermaster/approved');
	}

	public function approved(){
		$data = array('pendinglist'=>$this->pendingapplicant->getapproved('*'));
		if(isset($_SESSION['authentication'])){
			$this->load->view('pages/dash/approved.php',$data);
		}
		else{
			$this->load->view('pages/login',$data);
		}
	}

	public function complete($nic=0){
		// $nic = ['nic'=>$nic];
		$data = $this->pendingapplicant->loadinfo($nic);
		if(isset($_SESSION['authentication'])){
			$this->load->view('pages/dash/complete',$data);
		}
		else{
			$this->load->view('pages/login',$data);
		}
	}

	public function submitcomplete(){
		$this->pendingapplicant->completesubmission($_POST['nic']);
		$this->approved();
	}	
}
