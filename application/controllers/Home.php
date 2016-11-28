<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($page = 'Login') {
        //$this->CheckCookie();
        $data['title'] = $page;
        $this->load->view($page, $data);
    }

    public function Login() {
        if ($this->form_validation->run('login') == TRUE) {
            $this->form_validation->set_rules('form', 'Form', ['callback_user_login']);
            if ($this->form_validation->run() == TRUE) {
                redirect('/Member', 'refresh');
            }
        }
        $this->index();
    }

    public function user_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');
        $this->form_validation->set_message('user_login', '! รหัสผ่านไม่ถูกต้อง');
        return $this->Auth_model->login($email, $password, $remember);
    }

    public function Register() {
        if ($this->form_validation->run('register') == TRUE) {
            if ($this->Auth_model->add_user()) {
                redirect('/', 'refresh');
            }
        } else {
            $this->index('Register');
        }
    }

    public function Logout() {
        //delete_cookie('bt_cookie');
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('/', 'refresh');
    }

    // public function CheckCookie() {
    //        if ($this->session->userdata('logged_in')) {
    //            redirect('/Member', 'refresh');
    //        }
    // if (!empty(get_cookie('bt_cookie'))) {
    //     $textauth = $this->encryption->decrypt(get_cookie('bt_cookie'));
    //     $user = json_decode($textauth);
    //     if ($this->Auth_model->login($user->email, $user->password, true)) {
    //         redirect('/Member', 'refresh');
    //     }
    // }
    // $email = $this->input->post('email');
    // $password = $this->input->post('password');
    // $remember = $this->input->post('remember');
    //if ($this->Auth_model->login($email, $password, $remember)) {
    // } else {s
    //                $this->session->set_flashdata('message', 'User Invalid');
    //  $this->index();
    //}
    // $this->index();
    // }
}
