<?php
class Mail extends CI_Model {
    public function sendmail($data){
        $this->db->insert('messages',$data);
    }

}?>