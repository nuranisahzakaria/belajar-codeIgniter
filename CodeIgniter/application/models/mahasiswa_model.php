<?php
    class Mahasiswa_model extends CI_Model{
        public function get_data()
        {
            return $this->db->get('mahasiswa')->result_array();
        }
    }
?>