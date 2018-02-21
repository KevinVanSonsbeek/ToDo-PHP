<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("lists_model", "listsModel");
        $this->load->model("tasks_model", "tasksModel");
    }

    public function index() {
        echo "test";
    }

    public function getAllLists() {
        $listsArray = $this->listsModel->getAllLists();
        echo $listsArray;
    }

    public function getAllTasks() {
        $tasksArray = $this->tasksModel->getAllTasks();
        echo $tasksArray;
    }

    public function getListTasks($data) {
        $listTasksArray = $this->tasksModel->getTasksFromList($data);
        echo $listTasksArray;
    }

}
