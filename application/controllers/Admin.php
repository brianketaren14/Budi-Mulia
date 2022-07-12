<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function insert()
    {
        $this->load->model('berita_model');
        $data = $this->berita_model->getPenulis();
        $data = array('data' => $data);
        $this->load->view('template/header_admin');
        $this->load->view('template/insert', $data);
        $this->load->view('template/footer');
    }
    public function edit($id)
    {
        $this->load->model('berita_model');
        $data = $this->berita_model->getBeritaEdit($id);
        $data = array('data' => $data);
        $penulis = $this->berita_model->getPenulis();
        $penulis = array('penulis' => $penulis);
        $this->load->view('template/header_admin', $penulis);
        $this->load->view('template/edit', $data);
        $this->load->view('template/footer');
    }
    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Login"));
        } else {
            $this->load->model('berita_model');
            $data = $this->berita_model->getBeritaAdmin();
            $data = array('data' => $data);
            $this->load->view('template/header_admin');
            $this->load->view('template/data_berita', $data);
        }
    }
    public function insert_data()
    {
        $this->load->model('berita_model');
        if ($_FILES['gambar']['name'] == "") {
        } else {
            $gambar = $_FILES['gambar'];
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo 'Upload Gagal';
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'id_berita' => null,
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar' => $gambar,
            'tgl' => $this->input->post('tgl'),
            'sinopsis' => $this->input->post('sinopsis'),
            'id_penulis' => $this->input->post('penulis'),
        );
        $data = $this->berita_model->Insert('berita', $data);
        redirect(base_url('Admin'), 'refresh');
    }
    public function delete_data($id)
    {
        $id_berita = array('id_berita' => $id);
        $this->load->model('berita_model');
        $this->berita_model->Delete('berita', $id_berita);
        redirect(base_url('Admin'), 'refresh');
    }
    public function edit_data()
    {
        $this->load->model('berita_model');
        $gambar = $_FILES['gambar'];
        if ($_FILES['gambar']['name'] == '') {
            $gambar = $_POST['gambarlama'];
        } else {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo 'Upload Gagal';
                die();
            } else {
                unlink("./assets/gambar/" . $_POST['gambarlama']);
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'id_berita' => $_POST['id_berita'],
            'judul' => $_POST['judul'],
            'isi' => $_POST['isi'],
            'gambar' => $gambar,
            'tgl' => $_POST['tgl'],
            'sinopsis' => $_POST['sinopsis'],
            'id_penulis' => $_POST['id_penulis']
        );

        $where = array('id_berita' => $_POST['id_berita']);
        $res = $this->berita_model->Update('berita', $data, $where);
        if ($res > 0) {
            redirect(base_url('Admin'), 'refresh');
        }
    }
    public function profile()
    {
        $this->load->model('login_model');
        $where = array(
            'username' => $this->session->userdata('nama')
        );
        $data = $this->login_model->cek_login('penulis', $where)->result_array();
        $data = array('data' => $data);
        $this->load->view('template/header_admin');
        $this->load->view('template/profile', $data);
        $this->load->view('template/footer');
    }
}
