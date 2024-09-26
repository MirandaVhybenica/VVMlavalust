<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {

    public function read()
    {
        return $this->db->table('vvm_users')->get_all();
    }
    
    

    public function create($vvm_last_name, $vvm_first_name, $vvm_email, $vvm_gender, $vvm_address){
        $data = array(
            'vvm_last_name' => $vvm_last_name,
            'vvm_first_name' => $vvm_first_name,
            'vvm_email' => $vvm_email,
            'vvm_gender' => $vvm_gender,
            'vvm_address' => $vvm_address

        );
        return $this->db->table('vvm_users')-> insert($data);
    }
    public function get_one($id){
        return $this->db->table('vvm_users')->where('id', $id)->get();
    }


    public function update($vvm_last_name, $vvm_first_name, $vvm_email, $vvm_gender, $vvm_address, $id){
        $data = array
        (
            'vvm_last_name' => $vvm_last_name,
            'vvm_first_name' => $vvm_first_name,
            'vvm_email' => $vvm_email,
            'vvm_gender' => $vvm_gender,
            'vvm_address' => $vvm_address

        );  
        return $this->db->table('vvm_users')->where('id',$id)->update($data);    

    }

    public function delete($id){
        return $this->db->table('vvm_users')->where('id', $id)->delete();

    }
}
?>
