<?php


class User_model extends CI_model{
    
    public function create($formArray){
        $this->db->insert('users',$formArray);
    }
    public function all(){
        return $users=$this->db->get('users')->result_array();
    }
    
    public function getuser($userid){
        $this->db->where('user_id',$userid);
        return $user=$this->db->get('users')->row_array();
    }
    public function updateuser($userid,$formArray){
        $this->db->where('user_id',$userid);
        $this->db->update('users',$formArray);
       
}

public function deleteuser($userid){
    $this->db->where('user_id',$userid);
    $this->db->delete('users');
   
}
}
?>