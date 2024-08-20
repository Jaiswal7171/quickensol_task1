<?php

class Crud_model extends CI_Model {


    public function saveData($data) {
        
        $query = $this->db->insert('employee', $data);
        

        if ($query) {
            return true;
        } else {
            return false; // Consider handling the error or logging it
        }
    }

    // Function to get all employees from the 'employee' table
    public function getAllEmployee() {
        // Retrieve all records from the 'employee' table
        $query = $this->db->get('employee');
        
        // Check if the query was successful
        if ($query) {
            return $query->result(); // Return results as an array of objects
        } else {
            return false; // Consider handling the error or logging it
        }
    }
}
?>
