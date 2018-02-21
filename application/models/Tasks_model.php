<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
    * Get all Tasks from database
    */
    public function getAllTasks() {
        $query = $this->db->query("SELECT * FROM tasks");

        $queryData = json_encode($query->result());
        return $queryData;
    }

    /**
    * Get specific task
    */
    public function getTaskById($data) {
        $id = $data;

    }

    /**
    * Get all tasks from specific list
    */
    public function getTasksFromList($data) {
        $id = $data;

        $sql = "SELECT * FROM tasks WHERE list_id=?";
        $query = $this->db->query($sql, $id);

        $queryData =  $query->result();

        $jsonData = json_encode($queryData);
        return $jsonData;
    }
}
