<?php
        class UploadClinicsModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function insertClinics($fileName,$numeClinica, $adresaClinica, $telefonClinica, $emailClinica, $latitudineClinica, $longitudineClinica, $idClinicaD, $idSpec)
                {
                    $numeClinica = $this->db->escape($numeClinica);
                    $adresaClinica = $this->db->escape($adresaClinica);
                    $telefonClinica = $this->db->escape($telefonClinica);
                    $emailClinica = $this->db->escape($emailClinica);
                    $latitudineClinica = $this->db->escape($latitudineClinica);
                    $longitudineClinica = $this->db->escape($longitudineClinica);   
                    $fileName = $this->db->escape($fileName);   
                    $idClinicaD = $this->db->escape($idClinicaD);   
                    $idSpec = $this->db->escape($idSpec);    

                    $sql = "INSERT INTO clinici (denumire, adresa, telefon, email, logoFileName, latitudine, longitudine) VALUES ($numeClinica, $adresaClinica, $telefonClinica, $emailClinica, $fileName, $latitudineClinica, $longitudineClinica)"; 
                   
                    $result = $this->db->query($sql);

                    $sql1 = "SELECT id FROM clinici WHERE denumire = $numeClinica and adresa = $adresaClinica and latitudine = $latitudineClinica and  longitudine = $longitudineClinica";
                    
                    $rs = $this->db->query($sql1)->result_array();
                    
                    foreach ($rs as $item) 
                    {
                        $id = $item["id"];
                        break;
                    }
                    //$id = array_values($rs)[0];

                    $sql2 = "INSERT INTO clinici_domenii (id_domeniu, id_clinica) VALUES ($idClinicaD, " . $id . ")";

                    $result2 = $this->db->query($sql2);

                    $sql3 = "INSERT INTO clinici_specializari (id_clinica, id_specializare) VALUES (" . $id . ", $idSpec)";
                    $result3 = $this->db->query($sql3);
                    return $result;
                }
        }

?>