<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
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
    }
    
    function send(){

        $userName = $this->input->post('name');
        $userEmail = $this->input->post('email');
        $userPhone = $this->input->post('phone');
        $userMessage = $this->input->post('message');

        // Load PHPMailer library
        $this->load->library('PHPMailerLib');
        
        // PHPMailer object
        $mail = $this->phpmailerlib->load();
        
        // SMTP configuration
/*        
        $mail->isSMTP();
        $mail->Host     = 'smtp.example.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'user@example.com';
        $mail->Password = '********';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
  */
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hmhbhealthymind@gmail.com';
        $mail->Password = '19320011932001';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('contact@hmhb.ro', 'HMHB');
        $mail->addReplyTo($userEmail, $userName);
        
        // Add a recipient
        $mail->addAddress('borcan.aniela@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Mesaj de la ' . $userName . '-' . $userEmail . ' din pagina Contact';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = $userMessage . '<br><b>' . $userName . '</b><br><i>' . $userPhone . '</i>';
        $mail->Body = $mailContent;
        
        // Send email
        $result = $mail->send();

        $res = 1;
        if (!$result)
            $res = 0;        
        
        redirect (base_url() . "index.php/contact");
        //header('Location: ' . base_url() . "index.php/contact");

        /*
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
        */  
    }
    
}