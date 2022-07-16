<?php
    class Home extends CI_Controller {
        public function index (){
            $this->load->model('mahasiswa_model');
            $data['mahasiswa'] = $this->mahasiswa_model->get_data();

            $this->load->view ('templates/header');
            $this->load->view ('mahasiswa/index', $data);
            $this->load->view ('templates/footer');
        }
    }

?>