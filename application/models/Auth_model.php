<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function login($email, $password, $remember) {
        $this->db->where("email", $email);
        $this->db->where("password", md5($password));
        $query = $this->db->get("users");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                //add all data to session
                $newdata = array(
                    'user_id' => $rows->id,
                    'user_name' => $rows->username,
                    'user_email' => $rows->email,
                    'logged_in' => TRUE,
                );
            }
//            $this->session->set_userdata($newdata);
            // $authtext = $this->encryption->encrypt(json_encode(['email' => $email, 'password' => $password]));
            // if ($remember)
            //     set_cookie('bt_cookie', $authtext, 86400);
            return true;
        }
        return false;
    }

    public function add_user() {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'created_at' => mdate('%Y-%m-%d %H:%i:%s', now('Asia/Bangkok')),
            'status' => '0'
        );
        $this->db->insert('users', $data);
        return true;
    }

}
