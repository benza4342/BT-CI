<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Auth_model');
    }
    public function index($page='Login')
    {
        $data['title'] =$page;
        $this->load->view($page, $data);
        
    }
    public function Register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required">', '</li></ul>');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[passwordconf]');
        $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        if ($this->form_validation->run() == TRUE){
            if($result=$this->Auth_model->add_user()) redirect('/', 'refresh');
        }else{
            $this->index('Register');
        }
    }
    // public function email_check($str)
    // {
    //     if ($str == 'test')
    //     {
    //         $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
    //         return FALSE;
    //     }
    //     else
    //     {
    //         return TRUE;
    //     }
    // }
}