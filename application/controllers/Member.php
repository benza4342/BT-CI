<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('parser');
    }
    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $data["title"]="Member";
            $this->load->view('members/index', $data, FALSE);
        }else{
            redirect('/', 'refresh');
        }
    }
}

/* End of file Main.php */