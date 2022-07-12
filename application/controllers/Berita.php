<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Berita extends CI_Controller
{
    public function index($where)
    {
        $this->load->model("berita_model");
        $data = $this->berita_model->detailBerita($where);
        $data = array('data' => $data);
        $this->load->view('template/header');
        $this->load->view('template/berita', $data);
        $this->load->view('template/footer');
    }
}
