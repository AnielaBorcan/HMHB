<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClinicsPage extends CI_Controller {

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

            $this->load->model('ClinicsPageModel');
            $this->load->helper('url_helper');
            $_SESSION["currentMenu"] = "services";
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);                       
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));            
            $this->lang->load('auth');
    }

	public function index()
	{	
		$idClinica = $this->input->get('idClinica');
		$result = $this->ClinicsPageModel->getInfo($idClinica);	
//echo"<pre>"; print_R($result); exit;
	    $clinicIds = $clinicNames = $clinicAdress = $clinicTel = $clinicMail = $clinicFileNames = $medicN = $medicTel = $medicPoza = $specializare  = $clinicLat = $clinicLong = array();
	
		foreach($result as $row)
		{
			$clinicIds[] = $row["id"];
			$clinicNames[] = $row["denumire"];		
			$clinicAdress[] = $row["adresa"];
			$clinicTel[] = $row["telefon"];
			$clinicMail[] = $row["email"];			
			$clinicFileNames[] = $row["logoFileName"];
			$clinicLat[] = $row["latitudine"];
			$clinicLong[] = $row["longitudine"];
			$medicN[] = $row["nume"];
			$medicTel[] = $row["telefonMedic"];
			$medicPoza[] = $row["pozaProfil"];
			$specializare[] = $row["denumireSpec"];
		}		
//echo"<pre>"; print_R($result);print_r($clinicTel);print_r( $clinicMail); exit;
		$data["clinicIds"] = $clinicIds;
		$data["clinicNames"] = $clinicNames;
		$data["clinicAdress"] = $clinicAdress;
		$data["clinicTel"] = $clinicTel;
		$data["clinicMail"] = $clinicMail;
		$data["clinicFileNames"] = $clinicFileNames;
		$data["clinicLat"] = $clinicLat;
		$data["clinicLong"] = $clinicLong;
		$data["medicN"] = $medicN;
		$data["medicTel"] = $medicTel;
		$data["medicPoza"] = $medicPoza;
		$data["specializare"] = $specializare;

		$this->load->view('templates/head');
		if ($this->ion_auth->logged_in())
			$this->load->view('templates/headerAdmin');		
		else
			$this->load->view('templates/header');		
		$this->load->view('clinicsPage', $data);
		$this->load->view('templates/script');
		$this->load->view('clinicsPageScript');

		$this->load->view('templates/footer');
	}
}
