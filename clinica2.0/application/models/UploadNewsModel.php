<?php
        class UploadNewsModel extends CI_Model {
               
                public function __construct()
                {
                        $this->load->database();
                }

                public function insertNews($title, $message, $fileName)
                {
                    $title = $this->db->escape($title);
                    $message = $this->db->escape($message);
                    $fileName = $this->db->escape($fileName);
                    
                    $sql = "INSERT INTO stiri (titlu, continut, poze) VALUES ($title , $message, $fileName)";                        

                    $result = $this->db->query($sql);

                    return $result;
                }
        }

?>