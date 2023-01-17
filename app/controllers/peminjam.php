<?php

class peminjam extends Controller
{
    public function __construct()
    {
        $this->user = $this->model('UserModel');
        $this->peminjam = $this->model("PeminjamModel");
    }

    public function index()
    {
        $keyword = $_POST['txtcari'] ?? '';
        $data['daftarPeminjam'] = $this->peminjam->search($keyword);
        $this->view('layout/header');
        $this->view('daftarPeminjam/index', $data);
        $this->view('layout/footer');
    }

    public function create()
    {
        $this->view('layout/header');
        $this->view('daftarPeminjam/create');
        $this->view('layout/footer');
    }

    public function insert()
    {
        $extensi=explode(".",$_FILES['fotopeminjam']['name']);
        $fotopeminjam="peminjam-".$_POST['nik'].".".end($extensi);
        $sumber=$_FILES['fotopeminjam']['tmp_name'];
        $upload=move_uploaded_file($sumber,"assets/foto/peminjam/".$fotopeminjam);
        
        if($upload) {
            $data = $_POST;
            $data['foto'] = $fotopeminjam;
            $insert = $this->peminjam->insert($data);
            if ($insert > 0) {
                exit(header("Location: ".BASE_URL."/peminjam"));
            }
        }
    }

    public function update($id)
    {
        if(@$_POST['ubah_foto']) {
            $extensi=explode(".",$_FILES['fotopeminjam']['name']);
            $fotopeminjam="peminjam-".$_POST['nik'].".".end($extensi);
            $sumber=$_FILES['fotopeminjam']['tmp_name'];
            $upload=move_uploaded_file($sumber,"assets/foto/peminjam/".$fotopeminjam);
        } else {
            $fotopeminjam = $this->peminjam->getByID($id)['foto'];
        }
        
        $data = $_POST;
        $data['foto'] = $fotopeminjam;
        $data['pendidikan'] = $this->peminjam->getByID($id)['pendidikan'];
        $update = $this->peminjam->update($id, $data);
        exit(header("Location: ".BASE_URL."/peminjam"));
    }

    public function edit($id)
    {
        $data['daftarPeminjam'] = $this->peminjam->getByID($id);
        $this->view('layout/header');
        $this->view('daftarPeminjam/edit', $data);
        $this->view('layout/footer');
    }

    public function detail($id)
    {
        $data['daftarPeminjam'] = $this->peminjam->getByID($id);
        $this->view('layout/header');
        $this->view('daftarPeminjam/detail', $data);
        $this->view('layout/footer');
    }
    
    public function hapus($id)
    {
        $delete = $this->peminjam->delete($id);
        if ($delete > 0) {
            exit(header("Location: ".BASE_URL."/peminjam"));
        }
    }
}
