<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxCalls extends CI_Controller {

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

            $this->load->model('AjaxCallsModel');
            $this->load->helper('url_helper');
            $_SESSION["currentMenu"] = "medici";
    }

	public function getClinics()
	{	
		$clinicName = $this->input->post('keyword');

		$resultArr = $this->AjaxCallsModel->getClinics($clinicName);	

		$result = "";
		if (sizeof($resultArr))
		{
			$result .= '<ul id="clinics-list">';

			foreach($resultArr as $clinic)
			{			
				$result .= '<li onClick=\'selectClinics(' . $clinic["id"] . ',"' . $clinic["denumire"] . '");\'>' . $clinic["denumire"] . '</li>';
			}
			$result .= '</ul>';
		}

		echo $result;
	}
	public function getSpecializari()
	{	
		$specName = $this->input->post('keyword');

		$resultArr = $this->AjaxCallsModel->getSpecializari($specName);	

		$result = "";

		if (sizeof($resultArr))
		{
			$result .= '<ul id="spec-list">';

			foreach($resultArr as $spec)
			{			
				$result .= '<li onClick=\'selectSpecializari(' . $spec["id"] . ',"' . $spec["denumire"] . '");\'>' . $spec["denumire"] . '</li>';
			}
			$result .= '</ul>';
		}

		echo $result;
	}

	public function getDomains()
	{	
		$domainName = $this->input->post('keyword');

		$resultArr = $this->AjaxCallsModel->getDomains($domainName);	

		$result = "";

		if (sizeof($resultArr))
		{
			$result .= '<ul id="domain-list">';

			foreach($resultArr as $dom)
			{			
				$result .= '<li onClick=\'selectDomain(' . $dom["id"] . ',"' . $dom["denumire"] . '");\'>' . $dom["denumire"] . '</li>';
			}
			$result .= '</ul>';
		}

		echo $result;
	}
}
