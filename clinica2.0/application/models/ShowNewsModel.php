<?php
        class ShowNewsModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function getInfo($id)
                {
                    $id = $this->db->escape($id);      
                    $sql= "
                            SELECT 
                                s.titlu, s.continut, s.poze
                            FROM 
                                stiri s
                            WHERE               
                                id = $id
                          ";

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }
        }

?>