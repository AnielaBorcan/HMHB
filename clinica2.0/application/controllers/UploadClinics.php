<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UploadClinics extends CI_Controller{
    
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

        $this->load->model('UploadClinicsModel');
        $this->load->helper('url_helper');
        $_SESSION["currentMenu"] = "clinici";
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);  
        if (!$this->ion_auth->logged_in())
          redirect(base_url() . "index.php/index");
    }
    public function upload()
    {
      $numeClinica = $this->input->post('numeC');
      $adresaClinica = $this->input->post('adresaC');
      $telefonClinica = $this->input->post('telefon');
      $emailClinica = $this->input->post('email');
      $latitudineClinica = $this->input->post('latC');
      $longitudineClinica = $this->input->post('longC');
      $idClinicaD = $this->input->post('idD');
      $idSpec = $this->input->post('idS');
      
      if($numeClinica &&  $adresaClinica && $telefonClinica && $emailClinica && $latitudineClinica && $longitudineClinica)
      {
        $target_dir = UPLOAD_CLINICS_IMG;
        $fileName = basename($_FILES["logo"]["name"]);
        $target_file = $target_dir . $fileName; 

        $r = $this->uploadFile($target_file);

        if ($r)
        {
          $ok = $this->UploadClinicsModel->insertClinics($fileName,$numeClinica, $adresaClinica, $telefonClinica, $emailClinica, $latitudineClinica, $longitudineClinica, $idClinicaD, $idSpec);
          if ($ok === true)
          {
            redirect (base_url() . "index.php/clinicsAdmin");
          }          
        }
      } 
    }

  function uploadFile($target_file)
  {   
    $submit = $this->input->post('submit');
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if($submit) {
        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["logo"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        echo $_FILES["logo"]["tmp_name"];
        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";              
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    return $uploadOk; 
  }
    
}