<?php

class Test_model extends CI_Model {

    public $id;
    public $name;

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function testing() {
        $query = $this->db->get('tbl_test', 10);
        return $query->result();
    }

}
