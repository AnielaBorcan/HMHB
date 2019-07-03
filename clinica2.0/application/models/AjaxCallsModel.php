<?php
        class AjaxCallsModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function getClinics($clinicName)
                {
                    //$clinicName = $this->db->escape($clinicName);                    
                    
                    $sql = "SELECT id, denumire FROM clinici WHERE denumire LIKE  '" . $clinicName . "%' ORDER BY denumire";                        

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }

                public function getSpecializari($specName)
                {                    
                    
                    $sql = "SELECT id, denumire FROM specializari WHERE denumire LIKE  '" . $specName . "%' ORDER BY denumire";                        

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }

                public function getDomains($domainName)
                {                    
                    
                    $sql = "SELECT id, denumire FROM domenii WHERE denumire LIKE  '" . $domainName . "%' ORDER BY denumire";                        

                    $query = $this->db->query($sql);

                    return $query->result_array();
                }
        }

?>