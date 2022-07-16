<?php
    class Home extends CI_controller{
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('mahasiswa/index');
            //$this->load->view('templates/footer');
        }
    }
?>