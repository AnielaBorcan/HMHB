<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
            parent::__construct();            
            $this->load->helper('url_helper');
            $_SESSION["currentMenu"] = "index";
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);                       
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));            
            $this->lang->load('auth');
    }

	public function index()
	{
		$data['title'] = $this->lang->line('index_heading');
		// the user is not logging in so display the login page
		// set the flash data error message if there is one
		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');		
		$data['identity'] = [
				'name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
				'maxlength' => '100',
				'size'      => '',
				'style'     => 'color:black'				
		];		
		$data['password'] = [
				'name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'maxlength' => '100',
				'size'      => '',
				'style'     => 'color:black'
		];
		
		$data['loggedIn'] = false;
		$data['userEmail'] = "";
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			$data['userEmail'] = $user->email;			
			$data['loggedIn'] = true;
		}	

		$this->load->view('templates/head');
		if ($this->ion_auth->logged_in())
			$this->load->view('templates/headerAdmin');		
		else
			$this->load->view('templates/header');		

		$this->load->view('index', $data);		
		$this->load->view('templates/script');
		$this->load->view('templates/footer');		
	}
}
