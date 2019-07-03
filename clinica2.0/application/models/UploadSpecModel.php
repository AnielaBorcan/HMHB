<?php
        class UploadSpecModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function insertSpec($numeSpec, $idSpecD)
                {
                    $numeSpec = $this->db->escape($numeSpec);
                    $idSpecD = $this->db->escape($idSpecD);
                    

                    $sql = "INSERT INTO specializari (denumire, id_domeniu) VALUES ($numeSpec, $idSpecD)"; 
                   
                    $result = $this->db->query($sql);
                    return $result;
                }
        }

?>