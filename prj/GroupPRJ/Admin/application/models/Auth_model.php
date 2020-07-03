<?php
class Auth_model extends CI_Model {
    public function login($data){
        return ($this->db->get_where('user', array('username' => $data['username'],'password'=>$data['passwd']))->num_rows());
    }

}?>