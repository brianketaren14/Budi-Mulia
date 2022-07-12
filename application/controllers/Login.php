<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/login');
        $this->load->view('template/footer');
    }

    function login_action()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->login_model->cek_login("penulis", $where);
        if ($cek->num_rows() > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"

            );
            $this->session->set_userdata($data_session);
            redirect(base_url("admin"));
        } else {
            echo "<script>alert('Username atau password salah')
            document.location.href = '" . base_url('login') . "'
            </script>";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("Login"));
    }
    public function register()
    {
        $this->load->view('template/header');
        $this->load->view('template/register');
        $this->load->view('template/footer');
    }
    public function register_data()
    {
        if ($_FILES['foto']['name'] == "") {
        } else {
            $foto = $_FILES['foto'];
            $config['upload_path'] = './assets/penulis';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo 'Upload Gagal';
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_penulis' => null,
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'foto' => $foto
        );

        $data = $this->login_model->register('penulis', $data);
        if ($data > 0) {
            echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href = '" . base_url('login') . "';
            </script>";
        } else {
            echo "<script>alert('Username Sudah Pernah Dipakai')
            document.location.href = '" . base_url('login/register') . "';
            </script>";
        }
    }
}
