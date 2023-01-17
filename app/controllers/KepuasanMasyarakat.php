<?php

class KepuasanMasyarakat extends Controller
{
    public function __construct()
    {
        $this->ikm = $this->model('IkmModel');
    }

    public function index()
    {
        $data = $this->ikm->first();
        $this->view('layout/header');
        $this->view('kepuasanMasyarakat/index', $data);
        $this->view('layout/footer');
    }

    public function pilih($ket) {
        $this->ikm->pilih($ket);
        exit(header("Location: ".BASE_URL."/kepuasanMasyarakat"));
    }
}
