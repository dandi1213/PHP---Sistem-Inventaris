<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekjur extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sekjur_model'); 
    }

    public function index() {
        $data['username'] = 'Sekretaris'; 

        $data['data_barang'] = $this->db->get('tbl_barang')->result_array();

        $this->load->view('sekjur/dashboard', $data);
    }
    
    public function tambah_barang() {
        $this->load->view('sekjur/tambah_barang');
    }
    
    public function simpan_barang() {
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah')
        );
        $this->Sekjur_model->tambah_barang($data);
        redirect('sekjur/index');
    }
    
    public function edit_barang($id_barang) {
        $data['barang'] = $this->Sekjur_model->edit_barang($id_barang);
        $this->load->view('sekjur/edit_barang', $data);
    }
    
    public function update_barang() {
        $id_barang = $this->input->post('id_barang');
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah')
        );
        $this->Sekjur_model->update_barang($id_barang, $data);
        redirect('sekjur/index');
    }
    
    public function hapus_barang($id_barang) {
        $this->Sekjur_model->hapus_barang($id_barang);
        redirect('sekjur/index');
    }
    
    public function logout() {
        redirect('login');
    }
}
?>
