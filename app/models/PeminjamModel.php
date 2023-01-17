<?php

class PeminjamModel extends Model
{
    public function table()
    {
        $this->table = 'tb_peminjam';
    }

    public function search($keyword)
    {
        if($keyword != '' || $keyword) {
            $query = "SELECT * FROM `$this->table` WHERE `nama` LIKE '%$keyword%'";
        } else {
            $query = "SELECT * FROM `$this->table`";
        }
        $this->db->query($query);
        $this->db->execute();

        return $this->db->all();
    }

    public function getByID($id) {
        $query = "SELECT * FROM `$this->table` WHERE id_peminjam = $id";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->first();
    }

    public function getByNIK($nik) {
        $query = "SELECT * FROM `$this->table` WHERE nik = $nik";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->first();
    }

    public function delete($id)
    {
        $query = "DELETE FROM `$this->table`
            WHERE id_peminjam = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insert($data)
    {
        $query = "INSERT INTO `$this->table` VALUES (:id_peminjam, :nik, :nama, :tempatLahir, :tanggalLahir, :jenisKelamin, :alamat, :rt, :rw, :kelurahan, :agama, :pendidikan, :statusPerkawinan, :pekerjaan, :golDarah, :nomorTlp, :foto)";
        $this->db->query($query);
        $this->db->bind('id_peminjam', NULL);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tempatLahir', $data['tempatLahir']);
        $this->db->bind('tanggalLahir', $data['tanggalLahir']);
        $this->db->bind('jenisKelamin', $data['jenisKelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('rt', (int)$data['rt']);
        $this->db->bind('rw', (int)$data['rw']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('statusPerkawinan', $data['statusPerkawinan']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('golDarah', $data['golDarah']);
        $this->db->bind('nomorTlp', $data['nomorTlp']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($id, $data)
    {
        $query = "UPDATE `$this->table` SET nik=:nik, nama=:nama, tempatLahir=:tempatLahir, tanggalLahir=:tanggalLahir, jenisKelamin=:jenisKelamin, alamat=:alamat, rt=:rt, rw=:rw, kelurahan=:kelurahan, agama=:agama, pendidikan=:pendidikan, statusPerkawinan=:statusPerkawinan, pekerjaan=:pekerjaan, golDarah=:golDarah, nomorTlp=:nomorTlp, foto=:foto WHERE id_penduduk =:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tempatLahir', $data['tempatLahir']);
        $this->db->bind('tanggalLahir', $data['tanggalLahir']);
        $this->db->bind('jenisKelamin', $data['jenisKelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('rt', (int)$data['rt']);
        $this->db->bind('rw', (int)$data['rw']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('statusPerkawinan', $data['statusPerkawinan']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('golDarah', $data['golDarah']);
        $this->db->bind('nomorTlp', $data['nomorTlp']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
