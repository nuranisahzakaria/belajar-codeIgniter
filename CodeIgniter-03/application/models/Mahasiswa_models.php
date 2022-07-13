<?php
class Mahasiswa_models extends CI_Model{
    public function getAllMahasiswa(){
        $query=$this->this->db->get('mahasiswa');
        return $query->result_array();
    }
}

?>