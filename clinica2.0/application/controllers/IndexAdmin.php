<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexAdmin extends CI_Controller {

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
            $_SESSION["currentMenu"] = "indexAdmin";
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);                       
            //$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));            
            //$this->lang->load('auth');

            
    }

	public function index()
	{
		if (!$this->ion_auth->logged_in())
			redirect(base_url() . "index.php/index");
		$this->load->view('templates/head');
		$this->load->view('templates/headerAdmin');		
		$this->load->view('indexAdmin');		
		$this->load->view('templates/script');
		$this->load->view('templates/footer');	

	}
}
