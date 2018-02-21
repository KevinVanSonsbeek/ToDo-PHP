<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lists_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getAllLists() {
        $query = $this->db->query("SELECT * FROM lists");

        $queryData = json_encode($query->result());

        return $queryData;
    }
}
