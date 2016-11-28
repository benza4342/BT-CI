<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
            redirect('/', 'refresh');
    }

    public function index() {
        $data = [
            'title' => 'Member',
            'list' => $this->Member_model->get()
        ];
        $this->load->view('members/index', $data, FALSE);
    }

    public function edit($id) {
        $data = [
            'title' => 'Member',
            'action' => 'EditMember',
            'model' => $this->Member_model->getmember($id)
        ];
        $this->load->view('members/form', $data, FALSE);
    }

    public function add() {
        $data = [
            'title' => 'Member',
            'action' => 'AddMember',
        ];
        $this->load->view('members/form', $data, FALSE);
    }

}

/* End of file Main.php */