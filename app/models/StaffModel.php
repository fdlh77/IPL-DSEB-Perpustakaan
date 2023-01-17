<?php

class StaffModel extends Model
{
    public function table()
    {
        $this->table = 'tb_staff';
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
        $query = "SELECT * FROM `$this->table` WHERE id = $id";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->first();
    }

    public function delete($id)
    {
        $query = "DELETE FROM `$this->table`
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function insert($data)
    {
        $query = "INSERT INTO `$this->table` VALUES (:id, :nip, :nama, :jenis_kelamin, :tempat_lahir, :tgl_lahir, :alamat, :jabatan, :no_tlp, :foto, :password)";
        $this->db->query($query);
        $this->db->bind('id', NULL);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('password', md5($data['password']));
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($id, $data)
    {
        $query = "UPDATE `$this->table` SET nip=:nip, nama=:nama, jenis_kelamin=:jenis_kelamin, tempat_lahir=:tempat_lahir, tgl_lahir=:tgl_lahir, alamat=:alamat, jabatan=:jabatan, no_tlp=:no_tlp, foto=:foto WHERE id =:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
