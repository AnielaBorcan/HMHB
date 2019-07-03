<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowNews extends CI_Controller {

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

            $this->load->model('ShowNewsModel');
            $this->load->helper('url_helper');
            $_SESSION["currentMenu"] = "about";
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);                       
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));            
            $this->lang->load('auth');
    }

	public function index()
	{	
		$newsId = $this->input->get('id');
		$result = $this->ShowNewsModel->getInfo($newsId);	

	    $news = $titles = $fileNames = array();

		foreach($result as $row)
		{
			$news[] = $row["continut"];					
			$titles[] = $row["titlu"];
			$fileNames[] = $row["poze"];
		}		

		$data["news"] = $news;
		$data["titles"] = $titles;
		$data["fileNames"] = $fileNames;

		$this->load->view('templates/head');
		if ($this->ion_auth->logged_in())
			$this->load->view('templates/headerAdmin');		
		else
			$this->load->view('templates/header');		
		$this->load->view('showNews', $data);
		$this->load->view('templates/script');
		$this->load->view('templates/footer');
	}
}
