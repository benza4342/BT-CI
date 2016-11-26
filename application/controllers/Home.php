<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index($page = 'Login') {
        $this->CheckCookie();
        $data['title'] = $page;
        $this->load->view($page, $data);
    }
    
    public function Register() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required">', '</li></ul>');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[passwordconf]');
        $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        if ($this->form_validation->run() == TRUE) {
            if ($this->Auth_model->add_user()) {
                redirect('/', 'refresh');
            }
        } else {
            $this->index('Register');
        }
    }
    
    public function Login() {
        $this->session->unmark_flash('message');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required">', '</li></ul>');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $remember=$this->input->post('remember');
            if ($this->Auth_model->login($email, $password,$remember)) {
                redirect('/Member', 'refresh');
            } else {
                $this->session->set_flashdata('message', 'User Invalid');
                $this->index();
            }
        } else {
            $this->index();
        }
    }
    
    public function Logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        delete_cookie('bt_cookie');
        redirect('/', 'refresh');
    }
    public function CheckCookie()
    {
        if($this->session->userdata('logged_in')) redirect('/Member', 'refresh');
        if(!empty(get_cookie('bt_cookie'))){
            $textauth= $this->encryption->decrypt(get_cookie('bt_cookie'));
            $user = json_decode ($textauth);
            if ($this->Auth_model->login($user->email, $user->password,true))redirect('/Member', 'refresh');
        }
        
    }
}