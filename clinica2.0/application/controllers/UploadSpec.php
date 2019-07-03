<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UploadSpec extends CI_Controller{
    
    /**
     * Email Class for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */    
    
    function  __construct(){
        parent::__construct();

        $this->load->model('UploadSpecModel');
        $this->load->helper('url_helper');
        $_SESSION["currentMenu"] = "specsAdmin";
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);  
        if (!$this->ion_auth->logged_in())
           redirect(base_url() . "index.php/index");
    }
    public function upload()
    {
      $numeSpec = $this->input->post('specN');
      $idSpecD = $this->input->post('idD');
      
      if($numeSpec)
      {
        
          $ok = $this->UploadSpecModel->insertSpec($numeSpec, $idSpecD);
          if ($ok === true)
          {
            redirect (base_url() . "index.php/specsAdmin");
          }          
        }
      } 
    }