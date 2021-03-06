<?php

class Pages extends CI_Controller {
	public function __construct()
    {
			parent::__construct();
			$this->load->helper('form');

	}

	public function view($page = 'login')
	{

			$this->load->helper('url_helper');
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
					// echo'hi';	
			}
	
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
	}
}
