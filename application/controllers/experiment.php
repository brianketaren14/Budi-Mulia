<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Experiment extends CI_Controller
{

    public function index($id)
    {
        // $data = $this->db->query("SELECT id_berita, judul, gambar, tgl, sinopsis, id_penulis FROM berita");
        // foreach ($data->result_array() as $berita) {
        //     echo "Judul " . $berita["judul"] . "<br>";
        //     echo "gambar " . $berita["gambar"] . "<br>";
        //     echo "tgl " . $berita["tgl"] . "<br>";
        //     echo "sinopsis " . $berita["sinopsis"] . "<br>";
        // }
        // $this->load->model("berita_model");
        // $data = $this->berita_model->getberita();
        // foreach ($data as $berita) {
        //     echo "Judul " . $berita["judul"] . "<br>";
        //     echo "gambar " . $berita["gambar"] . "<br>";
        //     echo "tgl " . $berita["tgl"] . "<br>";
        //     echo "sinopsis " . $berita["sinopsis"] . "<br>";
        // }

        // $data = $this->db->query("SELECT *, penulis.nama FROM berita join penulis on berita.id_penulis = penulis.id_penulis where id_berita = '$id'");
        // foreach ($data->result_array() as $berita) {
        //     echo "Judul " . $berita["judul"] . "<br>";
        //     echo "gambar " . $berita["gambar"] . "<br>";
        //     echo "tgl " . $berita["tgl"] . "<br>";
        //     echo "sinopsis " . $berita["sinopsis"] . "<br>";
        // }
        // $data = $this->db->query("SELECT gambar FROM  berita WHERE id_berita = '9'");
        // $gambar = $data->result_array();
        // echo $gambar[0]['gambar'];
        // $this->load->model('login_model');
        // $data = $this->login_model->getProfile('penulis', $id);

        $data = $this->db->query("SELECT * FROM penulis WHERE id_penulis = '$id'");
        foreach ($data->result_array() as $i) {
            print_r($i);
        }
    }
}
