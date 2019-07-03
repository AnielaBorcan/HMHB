<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
            $this->load->model('TeamModel');
            $this->load->helper('url_helper');
            $_SESSION["currentMenu"] = "team";
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);                       
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));            
            $this->lang->load('auth');
    }

	public function index()
	{
		$result = $this->TeamModel->getTeam();
		
		$doctorNames = $doctorSpecs = $doctorFileNames = array();
		
		foreach($result as $row)
		{
			$doctorNames[] = $row["nume"];
			$doctorSpecs[] = $row["denumire"];
			$doctorFileNames[] = $row["pozaProfil"];
		}		
		$data["doctorNames"] = $doctorNames;
		$data["doctorSpecs"] = $doctorSpecs;
		$data["doctorFileNames"] = $doctorFileNames;
		
		
		$this->load->view('templates/head');
		if ($this->ion_auth->logged_in())
			$this->load->view('templates/headerAdmin');		
		else
			$this->load->view('templates/header');		
		$this->load->view('team', $data);
		$this->load->view('templates/script');
		$this->load->view('templates/footer');
	}
}
