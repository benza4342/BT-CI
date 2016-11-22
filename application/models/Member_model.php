<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    public function get(){
        $user = $this->_db->select($this->_table,["[>]member_type" => ["member_type_id" => "member_type_id"]],'*');
        echo Flight::json($user);
    }
    public function getmember($id){
        $user = $this->_db->select($this->_table, ["[>]member_type" => ["member_type_id" => "member_type_id"]],"*", ["member_id" => $id]);
        echo Flight::json($user);
    }
    public function addmember($data) {
        $last_user_id = $this->_db->insert($this->_table, $data);
        echo Flight::json($last_user_id);
    }
    public function editmember($id,$data) {
        $last_user_id = $this->_db->update($this->_table,$data, ["member_id" => $id]);
        echo Flight::json($last_user_id);
    }
    public function deletemember($id){
        $user = $this->_db->delete($this->_table, ["member_id" => $id]);
        echo Flight::json($user);
    }
    public function getmember_type(){
        $user = $this->_db->select('member_type','*');
        echo Flight::json($user);
    }
}

/* End of file Member.php */