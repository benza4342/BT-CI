<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->helper('date');
    }
    function login($email,$password)
    {
        $this->db->where("email",$email);
        $this->db->where("password",$password);
        
        $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
            foreach($query->result() as $rows)
            {
                //add all data to session
                $newdata = array(
                'user_id'  => $rows->id,
                'user_name'  => $rows->username,
                'user_email'    => $rows->email,
                'logged_in'  => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }
    public function add_user()
    {
        $data=array(
        'username'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
        'password'=>md5($this->input->post('password')),
        'created_at'=>mdate('%Y-%m-%d %H:%i:%s', now('Asia/Bangkok')),
        'status'=>'0'
        );
        $this->db->insert('users',$data);
        return true;
    }
}
?>