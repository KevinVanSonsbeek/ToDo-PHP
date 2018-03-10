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

	/**
	* Create List
	*/
	public function create($data) {
		$sql = "INSERT INTO lists (list_name, list_description) VALUES (?, ?)";
		return $query = $this->db->query($sql, array($data['list_name'], $data['list_description']));
	}


	/**
	* Update list
	*/
	public function update($data) {
		print_r($data);
		echo "Tets";
		$sql = "UPDATE lists SET list_name=?, list_description=? WHERE list_id=?";
		return $query = $this->db->query($sql, array($data['list_name'], $data['list_description'], $data['list_id']));
	}

	/**
	* Delete list
	*/
	public function delete($data) {
		$id = $data;
		$sql = "DELETE FROM lists WHERE list_id=?";
		return $query = $this->db->query($sql, array($id));
	}
}
