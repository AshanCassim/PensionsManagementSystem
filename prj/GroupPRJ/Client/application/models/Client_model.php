<?php
class Client_Model extends CI_Model {
    public function __construct()
    {
            $this->load->database();
    }

    public function register(){
        $data = array(
            'nic' => $_POST['nic'],
            'password'=>$_POST['password'],
        );

        $otp=$_POST['otp'];
        $nic=$_POST['nic'];

        if($this->db->get_where('verification', array('nic' => $nic,'otp'=>$otp))->num_rows()){
            $this->setstatus();
            return ($this->db->insert('Pensioner',$data));

        }
        else{
            // echo "OTP doesn't match";
            return FALSE;
        }

    }

    public function login($data){
        return ($this->db->get_where('Pensioner', array('nic' => $data['nic'],'password'=>$data['passwd']))->num_rows());

    }

    public function loadinfo($client){
        $data =array();
        $data = $this->db->get_where('Pensioner',array('nic'=>$client))->row_array();
        // NITHYA!
        $status = $this->db->get_where('verification',array('nic'=>$client))->row_array();
        $revisions = array();
        foreach    ($this->db->get_where('revise-form',array('nic'=>$client))->result_array() as $row){
            array_push($revisions,array_slice($row,1,2));
        }
        $data['revisions']=$revisions;
        // NITHYA!
        $data['status'] = $status;
        return $data;
    }

    public function setstatus(){
        $this->db->where('nic', $_POST['nic']);
        $this->db->update('verification',array('status'=>1));
    }

}
?>