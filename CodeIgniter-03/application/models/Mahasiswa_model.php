<?php
class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa(){
        $query=$this->this->db->get('mahasiswa');
        return $query->result_array();
    }
}

?>