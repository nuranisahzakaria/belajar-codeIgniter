<?php
    class Mahasiswa extends CI_Controller{
        public function index (){
            $data['mahasiswa']=$this->mahasiswa_model->getAllMahasiswa();
            $this->load->view ('templates/header');
            $this->load->view ('mahasiswa/index');
            $this->load->view ('templates/footer');
        }
    }
?>