<?php
class Pendingapplicant extends CI_Model {
    public function save(){
        // print_r($_POST);
        $this->db->insert('verification',$_POST);
    }

    public function getpending($owner){
        $this->db->where('owner',$owner);
        $this->db->where('status',2);
        $this->db->or_where('status',3);
        $list = array();
        
        $results=$this->db->get_where('verification')->result_array();
        foreach ($results as $row){
            array_push($list,$row);
           
        }
        
        
        return($list);
    }

    public function getapproved($owner){
        $this->db->where('owner',$owner);
        $this->db->where('status',4);
        $this->db->or_where('status',30);
        $list = array();
        
        $results=$this->db->get_where('verification')->result_array();
        foreach ($results as $row){
            array_push($list,$row);
           
        }
        
        
        return($list);
    }


    public function loadinfo($nic){
        $data = $this->db->get_where('Pensioner',array('nic'=>$nic))->row_array();
        $revisions = array();
        foreach    ($this->db->get_where('revise-form',array('nic'=>$nic))->result_array() as $row){
            array_push($revisions,array_slice($row,1,2));
        }
        $data['revisions']=$revisions;
        
      
        return $data;
    }

    public function clearrevision($nic){
        $this->db->where('nic',$nic);
        $this->db->delete('revise-form');
    }

    public function revise($data){
        $this->db->insert('revise-form',$data);
        $this->db->where('nic',$data['nic']);
        $this->db->update('verification',array('status'=>3));
        
    }

    public function approve($nic){
        $this->db->where('nic',$nic);
        $this->db->update('verification',array('status'=>4));
    }

    public function completesubmission($nic){
        $this->db->where('nic',$nic);
        $this->db->update('Pensioner',array('partii_array'=>implode(",",$_POST)));
        if(isset($_POST['save'])){
            $this->db->where('nic',$nic);
            $this->db->update('verification',array('status'=>30));
        }
        elseif(isset($_POST['complete'])){
            $this->db->where('nic',$nic);
            $this->db->update('verification',array('status'=>5));
        }
    }

}

