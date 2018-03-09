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

	public function getListInformation($list_id) {
		$sql = "SELECT * FROM lists where list_id=?";
		$query = $this->db->query($sql, $list_id);

        $queryData = json_encode($query->result());

        return $queryData;
	}

	public function create() {
	
	}

	public function update() {
	
	}

	public function delete($list_id) {
	
	}
}
