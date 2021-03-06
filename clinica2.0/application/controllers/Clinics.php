<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clinics extends CI_Controller {

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

            $this->load->model('ClinicsModel');
            $this->load->helper('url_helper');
            $_SESSION["currentMenu"] = "services";
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);                       
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));            
            $this->lang->load('auth');
    }

	public function index()
	{	
		$domainId = $this->input->get('domainId');
		$result = $this->ClinicsModel->getClinics($domainId);	

		$clinicNames = $clinicIds = $clinicFileNames = array();
	
		foreach($result as $row)
		{
			$clinicNames[] = $row["denumire"];					
			$clinicIds[] = $row["id"];
			$clinicFileNames[] = $row["logoFileName"];
		}		

		$data["clinicNames"] = $clinicNames;
		$data["clinicIds"] = $clinicIds;
		$data["clinicFileNames"] = $clinicFileNames;

		$this->load->view('templates/head');
		if ($this->ion_auth->logged_in())
			$this->load->view('templates/headerAdmin');		
		else
			$this->load->view('templates/header');		
		$this->load->view('clinics', $data);
		$this->load->view('templates/script');
		$this->load->view('templates/footer');
	}
}
