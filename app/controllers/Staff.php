<?php

class Staff extends Controller
{
    public function __construct()
    {
        $this->staff = $this->model('StaffModel');
    }

    public function index()
    {
        $keyword = $_POST['txtcari'] ?? '';
        $data['staff'] = $this->staff->search($keyword);
        $this->view('layout/header');
        $this->view('Staff/index', $data);
        $this->view('layout/footer');
    }

    public function create()
    {
        $this->view('layout/header');
        $this->view('staff/create');
        $this->view('layout/footer');
    }

    public function insert()
    {
        $extensi=explode(".",$_FILES['fotostaff']['name']);
        $fotostaff="staff-".$_POST['nip'].".".end($extensi);
        $sumber=$_FILES['fotostaff']['tmp_name'];
        $upload=move_uploaded_file($sumber,"assets/foto/staff/".$fotostaff);
        
        if($upload) {
            $data = $_POST;
            $data['foto'] = $fotostaff;
            $insert = $this->staff->insert($data);
            if ($insert > 0) {
                exit(header("Location: ".BASE_URL."/penduduk"));
            }
        }
    }

    public function update($id)
    {
        if(@$_POST['ubah_foto']) {
            $extensi=explode(".",$_FILES['fotostaff']['name']);
            $fotostaff="staff-".$_POST['nip'].".".end($extensi);
            $sumber=$_FILES['fotostaff']['tmp_name'];
            $upload=move_uploaded_file($sumber,"assets/foto/staff/".$fotostaff);
        } else {
            $fotostaff = $this->staff->getByID($id)['foto'];
        }
        
        $data = $_POST;
        $data['foto'] = $fotostaff;
        $update = $this->staff->update($id, $data);
        exit(header("Location: ".BASE_URL."/penduduk"));
    }

    public function edit($id)
    {
        $data['staff'] = $this->staff->getByID($id);
        $this->view('layout/header');
        $this->view('staff/edit', $data);
        $this->view('layout/footer');
    }

    public function detail($id)
    {
        $data['staff'] = $this->staff->getByID($id);
        $this->view('layout/header');
        $this->view('staff/detail', $data);
        $this->view('layout/footer');
    }
    
    public function hapus($id)
    {
        $delete = $this->staff->delete($id);
        if ($delete > 0) {
            exit(header("Location: ".BASE_URL."/staff"));
        }
    }
}
