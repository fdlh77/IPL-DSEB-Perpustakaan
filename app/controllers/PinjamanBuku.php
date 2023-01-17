<?php

class PinjamanBuku extends Controller
{
    public function __construct()
    {
        $this->pinjamBuku = $this->model('PeminjamanModel');
        $this->peminjam = $this->model('PeminjamModel');
    }

    public function index()
    {
        $keyword = $_POST['txtcari'] ?? '';
        $data['pinjamBuku'] = $this->pinjamBuku->search($keyword);
        $this->view('layout/header');
        $this->view('pinjamBuku/index', $data);
        $this->view('layout/footer');
    }

    public function create()
    {
        $kode = count($this->pinjamBuku->all()) + 5;
        $char="P";
        $data['kode'] =$char.sprintf("%05s",$kode);
        $data['pinjamBuku'] = isset($_POST['nik']) ? $this->peminjam->getByNIK($_POST['nik']) : '';
        $this->view('layout/header');
        $this->view('pinjamBuku/create', $data);
        $this->view('layout/footer');
    }

    public function insert()
    {
        $insert = $this->pinjamBuku->insert($_POST);
        if ($insert > 0) {
            exit(header("Location: ".BASE_URL."/pinjamBuku"));
        }
    }

    public function ambil($id)
    {
        $ambil = $this->pinjamBuku->ambil($id);
        if ($ambil > 0) {
            exit(header("Location: ".BASE_URL."/pinjamBuku"));
        }
    }
}
