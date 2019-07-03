<?php
        class ClinicsPageModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function getInfo($id)
                {
                    $id = $this->db->escape($id);      
                    $sql= "
                            SELECT cln.*, m.nume, m.telefon AS telefonMedic, m.pozaProfil, sp.denumire AS denumireSpec
                                FROM clinici cln   JOIN clinici_specializari cs ON (cln.id = cs.id_clinica)
                                                   JOIN medici_specializari ms ON (cs.id_specializare = ms.id_specializare)
                                                   JOIN specializari sp ON (sp.id = ms.id_specializare)
                                                   JOIN medici m ON  (m.id_clinica = cln.id and m.id = ms.id_medic)
                                WHERE
                                    cln.id = $id";

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }
        }

?>