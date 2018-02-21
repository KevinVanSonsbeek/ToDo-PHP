<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index() {
        $this->loadPage("main");
    }

    public function loadPage($page)
    {
        $this->load->view('pages/' . $page);
    }

}

