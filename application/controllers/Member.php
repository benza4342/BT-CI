
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function index()
    {
        $data["title"]="Member";
        $this->load->view('members/index', $data, FALSE);
    }
}

/* End of file Main.php */
