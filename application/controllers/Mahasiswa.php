<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['data_mahasiswa'] = $this->Mahasiswa_model->getMahasiswaData(); 
        $this->load->view('Mahasiswa/dashboard', $data);
    }

    public function logout() {
        $this->session->sess_destroy(); 

        redirect('login'); 
    }
}
?>
