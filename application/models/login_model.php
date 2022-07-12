<?php
class Login_Model extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function register($table, $data)
    {
        $query = $this->db->get_where($table, array('username' => $data['username']));
        if (empty($query->row_array())) {
            $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
            return $res; // Kode ini digunakan untuk mengembalikan hasil $res
        } else {
            return $res = 0;
        }
    }
}
