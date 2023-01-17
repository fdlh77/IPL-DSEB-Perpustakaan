<?php

class kembalikan extends Controller
{
    public function __construct()
    {
        $this->kembali = $this->model('kembalikanModel');
        $this->peminjam = $this->model('peminjamModel');
    }

    public function index()
    {
        $keyword = $_POST['txtcari'] ?? '';
        $data['kembaliBuku'] = $this->kembali->search($keyword);
        $this->view('layout/header');
        $this->view('kembaliBuku/index', $data);
        $this->view('layout/footer');
    }
    
    public function create()
    {
        $kode = count($this->kembali->all()) + 5;
        $char = "P";
        $data['kode'] = $char.sprintf("%05s",$kode);
        $data['ktp'] = isset($_POST['nik']) ? $this->penduduk->getByNIK($_POST['nik']) : '';
        $this->view('layout/header');
        $this->view('kembaliBuku/create', $data);
        $this->view('layout/footer');
    }
    
    public function insert()
    {
        $data = $_POST;
        $data['nomor_kk'] = rand();
        $insert = $this->kembali->insert($data);
        if ($insert > 0) {
            exit(header("Location: ".BASE_URL."/kembaliBuku"));
        }
    }

    public function ambil($id)
    {
        $data['kembaliBuku'] = $this->kembali->getByID($id);
        $data['peminjam'] = $this->penduduk->getByNIK($data['kk']['nik']);
        $ambil = $this->kembali->ambil($id, $data);
        if ($ambil > 0) {
            exit(header("Location: ".BASE_URL."/kembaliBuku"));
        }
    }
}
