<?php
        class AboutModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function get_last_three_news()
                {
                     $sql = "SELECT 
                                    s.id, s.titlu, s.continut, s.poze
                            FROM 
                                    stiri s
                            ORDER BY 
                                    s.id DESC
                            LIMIT 3";

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }
        }

?>