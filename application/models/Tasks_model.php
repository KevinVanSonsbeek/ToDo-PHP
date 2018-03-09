<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



/**CREATE**/

	/**
	* Create task
	*/
	public function create($data) {
		$sql = "INSERT INTO tasks (list_id, task_name, task_description, task_status, task_duration) VALUES (?, ?, ?, ?, ?)";
		return $query = $this->db->query($sql, array($data['list_id'], $data['task_name'], $data['task_description'], $data['task_status'], $data['task_duration']));
	}

/**GET/READ**/

	/**
	* Get task by id
	*/
	public function get($data) {
		$id = $data;
		$sql = "SELECT * FROM tasks WHERE task_id=?";
		$query = $this->db->query($sql, $id);

		$queryData = json_encode($query->result());
		return $queryData;	
	}

	/**
	* Get tasks by list_id
	*/
	public function getAllFrom($data) {
		$id = $data;
		$sql = "SELECT * FROM tasks WHERE list_id=?";
        $query = $this->db->query($sql, $id);

        $queryData =  json_encode($query->result());
        return $queryData;
	}

	/**
	* Get tasks
	*/
	public function getAll() {
		$sql = "SELECT * FROM tasks";
		$query = $this->db->query($sql);

		$queryData = json_encode($qurey->result());
		return $queryData;
	}

	
	
/**UPDATE**/

	/**
	* Update task
	*/
	public function update($data) {
		$sql = "UPDATE tasks SET task_name=?, task_description=?, task_status=?, task_duration=? WHERE task_id=?";
		return $query = $this->db->query($sql, array($data['task_name'], $data['task_description'], $data['task_status'], $data['task_duration'], $data['task_id']));
	}

/**DELETE**/
	
	/**
	* Delete task
	*/
	public function delete($data) {
		$id = $data;
		$sql = "DELETE FROM tasks WHERE task_id=?";
		return $query = $this->db->query($sql, array($id));
	}

//------------------------------//

}
