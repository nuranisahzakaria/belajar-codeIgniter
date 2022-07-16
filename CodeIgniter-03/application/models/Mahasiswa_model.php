<?php
class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa()
        {
            $query = $this->db->get('mahasiswa')->result_array();
            return $query->result_array();
        }
}
?>