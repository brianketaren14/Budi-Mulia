<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Berita_model extends CI_Model
{
    public function getBerita()
    {
        $data = $this->db->query("SELECT id_berita, judul, gambar, tgl, sinopsis, penulis.nama FROM berita join penulis on berita.id_penulis = penulis.id_penulis");
        return $data->result_array();
    }

    public function detailBerita($where)
    {
        $data = $this->db->query("SELECT id_berita, judul, gambar, tgl, isi, penulis.nama, penulis.foto FROM berita join penulis on berita.id_penulis = penulis.id_penulis where id_berita = '$where'");
        return $data->result_array();
    }
    public function getBeritaAdmin()
    {
        $data = $this->db->query("SELECT id_berita, judul, gambar, tgl,  penulis.nama FROM berita join penulis on berita.id_penulis = penulis.id_penulis");
        return $data->result_array();
    }

    public function getBeritaEdit($id)
    {
        $data = $this->db->query("SELECT *, penulis.nama FROM berita join penulis on berita.id_penulis = penulis.id_penulis WHERE id_berita='$id'");
        return $data->result_array();
    }

    public function getPenulis()
    {
        $data = $this->db->query("SELECT id_penulis, nama FROM  penulis ");
        return $data->result_array();
    }

    public function Insert($table, $data)
    {
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }

    public function Update($table, $data, $where)
    {
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
    public function Delete($table, $where)
    {
        $data = $this->db->query("SELECT gambar FROM  berita WHERE id_berita = '" . $where['id_berita'] . "'");
        $gambar = $data->result_array();
        unlink("./assets/gambar/" . $gambar[0]['gambar']);
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record
    }
}
