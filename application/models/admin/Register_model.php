<?php

class Register_model extends CI_Model {

        public function saveData($data) {
            $query = $this->db->insert('employee', $data);
            return $query ? true : false; // Consider handling the error or logging it
        }


        public function getAllEmployees() {
            $query = $this->db->get('employee'); // 'employee' is the table name
            return $query->result(); // Return the result as an array of objects
        }


    }

?>
