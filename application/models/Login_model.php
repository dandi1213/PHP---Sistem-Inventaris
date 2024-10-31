<?php
class Login_model extends CI_Model
{
    public function checkLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tbl_login');

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }



    public function getMahasiswaDataByPassword($password)
    {

        $query = $this->db->get_where('tbl_mahasiswa', array('nim' => $password));
        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function getNamaLabByKodeLab($kode_lab)
    {
        $query = $this->db->get_where('tbl_lab', array('kode_lab' => $kode_lab));
        return $query->row_array();
    }

    public function getNamaPJByNIP($nip)
    {
        $query = $this->db->get_where('tbl_pj_inventaris', array('nip' => $nip));
        return $query->row_array();
    }
}
