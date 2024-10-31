<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekjur_model extends CI_Model
{

    public function get_barang()
    {
        return $this->db->get('tbl_barang')->result_array();
    }

    public function tambah_barang($data)
    {
        $this->db->insert('tbl_barang', $data);
    }

    public function edit_barang($id_barang)
    {
        return $this->db->get_where('tbl_barang', array('id_barang' => $id_barang))->row_array();
    }

    public function update_barang($id_barang, $data)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbl_barang', $data);
    }

    public function hapus_barang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('tbl_barang');
    }
}
