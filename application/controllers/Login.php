<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->library('form_validation'); 
    }
    

    public function index() {
        $this->load->view('Login/login_view');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->load->model('Login_model');
        $user = $this->Login_model->checkLogin($username, $password);
        
        if ($user) {
            if ($user['role'] === "mahasiswa") {
                $mahasiswa_data = $this->Login_model->getMahasiswaDataByPassword($password);
                if ($mahasiswa_data) {
                    $this->mahasiswa($mahasiswa_data);
                } else {
                    echo "Mahasiswa data not found for given password";
                }
            } elseif ($user['role'] === "sekjur") {
                $this->sekjur($user['username']);
            } elseif ($user['role'] === "pjlab") {
                $this->pjlab();
            }
        } else {
            $this->session->set_flashdata('error', 'Incorrect username or password');
            redirect('login'); 
        }
    }
    
    public function mahasiswa($mahasiswa_data) {
        $this->load->model('Login_model');
        
        $kode_lab = $mahasiswa_data['kode_lab'];
        $nama_lab = $this->Login_model->getNamaLabByKodeLab($kode_lab);
    
        $nip = $nama_lab['nip']; 
        $nama_pj = $this->Login_model->getNamaPJByNIP($nip); 
    
        $data['mahasiswa_data'] = $mahasiswa_data;
        $data['nama_lab'] = $nama_lab;
        $data['nama_pj'] = $nama_pj; 
    
        $this->load->view('mahasiswa/dashboard', $data);
    }
    


    public function sekjur() {
        $data_barang = array(/* isian data barang */); 

        $data['data_barang'] = $data_barang; 

        $this->load->view('sekjur/dashboard', $data); 
    }


    public function pjlab(){
        $this->load->view('pjlab/dashboard');
    }
}
?>