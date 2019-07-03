<?php
         class TeamModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function getTeam()
                {
                        $sql = "SELECT
                                   m.nume, c.denumire, s.denumire, m.pozaProfil
                				FROM medici m 
                        				JOIN clinici c ON (c.id = m.id_clinica)
                        				JOIN medici_specializari ms ON (m.id = ms.id_medic)
                        				JOIN specializari s ON (ms.id_specializare = s.id)
                                ORDER BY 
                                    m.nume";

                        $query = $this->db->query($sql);
                        return $query->result_array();
                }
        }
?>