<?php
        class ClinicsModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function getClinics($id)
                {
                    $id = $this->db->escape($id);    
                        $sql= "
                            SELECT    
                                cln.*
                            FROM
                                clinici cln JOIN clinici_domenii cd ON (cln.id = cd.id_clinica)
                            WHERE
                                cd.id_domeniu = $id
                             ORDER BY
                                cln.denumire";

                        $query = $this->db->query($sql);

                        return $query->result_array();
                }
        }

?>