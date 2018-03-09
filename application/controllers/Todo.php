<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

	/**
	* CONSTRUCTOR
	*/
    public function __construct()
    {
        parent::__construct();
        $this->load->model("lists_model", "listsModel");
        $this->load->model("tasks_model", "tasksModel");
    }

	/**
	* INDEX
	*/
	public function index() {
		$this->lists();
	}

	/**
	* Show Create Task
	*/
	public function showCreateTask($list_id) {
		$data['list_id'] = $list_id;

		$this->load->view('master/header');
        $this->load->view('master/menu');
		$this->load->view("task/taskCreate", $data);
		$this->load->view("master/footer");
	}

	/**
	* Create Task
	*/
	public function createTask() {
		$data = $_POST;
		$this->tasksModel->create($data);
		header('Location: ' . base_url() . "todo/showListByID/" . $_POST['list_id']);
	}

	/**
	* Show Create List
	*/
	public function showCreateList() {
		
		$this->load->view("master/header");
		$this->load->view("master/menu");
		$this->load->view("list/createList");
		$this->load->view("master/footer");
	}


	/**
	* Create list
	*/
	public function createList() {
		$data = $_POST;
		$this->listsModel->create($data);
		//Return list id
		//header('Location: ' . base_url() . "list/" . $_POST['list_id']);
	}

	/**
	* Show Update list
	*/
	public function showUpdateList($list_id) {
		$data["list_data"] = json_decode($this->getListByID($list_id), true)[0];

		$this->load->view('master/header');
        $this->load->view('master/menu');
		$this->load->view("list/listUpdate", $data);
		$this->load->view("master/footer");	
	}

	/**
	* Update list
	*/
	public function updateList() {
		$data = $_POST;
		if($this->listsModel->update($data)) {
			header('Location: ' . base_url() . "list/" . $_POST['list_id']);
		}
	}

	/**
	* Show Update task
	*/
	public function showUpdateTask($task_id) {
		$data['task_data'] = json_decode($this->getTaskByID($task_id), true)[0];

		$this->load->view('master/header');
        $this->load->view('master/menu');
		$this->load->view("task/taskUpdate", $data);
		$this->load->view("master/footer");	
	}
	
	/**
	* Update task
	*/
	public function updateTask() {
		$data = $_POST;
		if($this->tasksModel->update($data)){
			header('Location: ' . base_url() . "todo/showListByID/" . $_POST['list_id']);
		}	
	}

	/**
	* Show Delete list
	*/

	/**
	* Delete list
	*/

	/**
	* Show Delete task
	*/
	public function showDeleteTask($task_id) {
		$data['task_data'] = json_decode($this->getTaskByID($task_id), true)[0];
		$data['list_data'] = json_decode($this->getListByID($data["task_data"]["list_id"]), true)[0];

		$this->load->view('master/header');
        $this->load->view('master/menu');
		$this->load->view("task/taskDelete", $data);
		$this->load->view("master/footer");	
	}

	/**
	* Delete task
	*/
	public function deleteTask() {
		$data = $_POST;

		if($this->tasksModel->delete($data['task_id'])) {
			header('Location: ' . base_url() . "todo/showListByID/" . $data['list_id']);
		}
	}

//*****************************************************************************************************************************************\\

	/**
	* Get data from list
	*/
	public function getListByID($list_id) {
		$listInfoArray = $this->listsModel->getListInformation($list_id);
		return $listInfoArray;
	}

	

/**READ/GET**/
	
	/**
	* Get task by id
	*/
	public function getTaskByID($data) {
		$taskData = $this->tasksModel->get($data);
		return $taskData;
	}

	/**
	* Get all task by list_id
	*/
    public function getTasksByListID($data) {
        $listTasksArray = $this->tasksModel->getAllFrom($data);
        return $listTasksArray;
    }

	/**
	* Get list by id
	*/
	public function showListByID($list_id) {
		$data['list_tasks'] = json_decode($this->getTasksByListID($list_id), true);
		$data['list_info'] = json_decode($this->getListByID($list_id), true)[0];

		$this->load->view('master/header');
        $this->load->view('master/menu');
        $this->load->view("pages/tasksList", $data);
		$this->load->view("master/footer");
	}

	public function lists() {
		$data['lists'] = json_decode($this->listsModel->getAllLists(), true);

		$this->load->view('master/header');
        $this->load->view('master/menu');
        $this->load->view("pages/lists", $data);
		$this->load->view("master/footer");
	}

}
