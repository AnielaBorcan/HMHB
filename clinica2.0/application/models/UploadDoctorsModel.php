<?php
        class UploadDoctorsModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function insertDoctors($numeMedic, $telefonMedic, $idClinicaM, $fileName, $idSpec)
                {
                    $numeMedic = $this->db->escape($numeMedic);
                    $telefonMedic = $this->db->escape($telefonMedic);
                    $idClinicaM = $this->db->escape($idClinicaM);
                    $fileName = $this->db->escape($fileName);
                    $idSpec = $this->db->escape($idSpec);
                    

                    $sql = "INSERT INTO medici (nume, telefon, id_clinica, pozaProfil) VALUES ($numeMedic , $telefonMedic, $idClinicaM, $fileName)";
                    $result = $this->db->query($sql);
                    
                    $sql1 = "SELECT id FROM medici WHERE id_clinica = $idClinicaM and nume = $numeMedic and telefon = $telefonMedic and  pozaProfil = $fileName";
                    $rs = $this->db->query($sql1)->result_array();
                    
                    foreach ($rs as $item) 
                    {
                        $id = $item["id"];
                        break;
                    }
                    //$id = array_values($rs)[0];

                    $sql2 = "INSERT INTO medici_specializari (id_medic, id_specializare) VALUES (" . $id . ", $idSpec)";

                    $result2 = $this->db->query($sql2);
                    
                    return $result && $result2;
                }
        }

?>