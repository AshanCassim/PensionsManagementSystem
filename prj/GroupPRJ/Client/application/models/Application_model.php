<?php
class Application_Model extends CI_Model {
    public function __construct()
    {
            $this->load->database();

    }

    public function save(){
        $this->db->where('nic', $_POST['nic']);
        $this->db->update('verification',array('status'=>2));
        $this->db->where('nic', $_POST['nic']);
        return ($this->db->update('Pensioner',$_POST));
        // return 1;
    }

}
?>