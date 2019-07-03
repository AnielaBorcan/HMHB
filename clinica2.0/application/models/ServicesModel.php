<?php
        class ServicesModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function getDomains($id)
                {
                     
                    $sql = "
                            SELECT 
                                z.denumire AS zona, d.denumire AS domeniu, d.id, d.imgFileName
                            FROM 
                                zone z JOIN zone_domenii zd ON (z.id = zd.id_zona)
                                       JOIN domenii d ON (zd.id_domeniu = d.id)
                        ";

                    if ($id)
                    {
                        $id = $this->db->escape($id);
                        $sql .= "
                            WHERE
                                 z.id = $id ";
                    }
                    $sql .= "
                            GROUP BY 
                                    d.id
                            ORDER BY 
                                    d.denumire";

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }
        }
?>