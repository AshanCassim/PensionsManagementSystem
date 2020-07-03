<?php
class Newapplicant extends CI_Model {
    public function save(){
        // print_r($_POST);
        $this->db->insert('verification',$_POST);
    }

    public function getnew($owner){
        $this->db->where('owner',$owner);
        $this->db->where('status',0);
        $list = array();
        foreach ($this->db->get('verification')->result_array() as $row){
            array_push($list,$row);
        }
        
        return($list);
    }

}