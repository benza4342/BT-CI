<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get() {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('users_type', 'users.user_type_id = users_type.user_type_id');
        return $this->db->get()->result_array();
    }

    public function getmember($id) {
        $this->db->select('id,email,created_at,users.user_type_id,user_type_desc');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->join('users_type', 'users.user_type_id = users_type.user_type_id');
        return $this->db->get()->result();
    }

    public function addmember($data) {
        $last_user_id = $this->_db->insert($this->_table, $data);
        echo Flight::json($last_user_id);
    }

    public function editmember($id, $data) {
        $last_user_id = $this->_db->update($this->_table, $data, ["member_id" => $id]);
        echo Flight::json($last_user_id);
    }

    public function deletemember($id) {
        $user = $this->_db->delete($this->_table, ["member_id" => $id]);
        echo Flight::json($user);
    }

    public function getmember_type() {
        $user = $this->_db->select('member_type', '*');
        echo Flight::json($user);
    }

}

/* End of file Member.php */