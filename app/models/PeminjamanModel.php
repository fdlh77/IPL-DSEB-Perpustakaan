<?php

class PeminjamanModel extends Model
{
    public function table()
    {
        $this->table = 'tb_pinjamanBuku';
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `$this->table`
        JOIN tb_peminjam ON tb_pinjamanBuku.nik = tb_peminjam.nik
        WHERE `nama` LIKE '%$keyword%'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->all();
    }

    public function getByID($id) {
        $query = "SELECT * FROM `$this->table` WHERE tb_pinjamanBuku = $id";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->first();
    }

    public function delete($id)
    {
        $query = "DELETE FROM `$this->table`
            WHERE no_peminjamanBuku = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insert($data)
    {
        $query = "INSERT INTO `$this->table` VALUES (:no_peminjamanBuku, :nik, :jenisPermohonan, :tgl_penyerahanBerkas, :tglRekam, :tgl_pengembalian, :status)";
        $this->db->query($query);
        $this->db->bind('no_peminjamanBuku', $data['no_peminjamanBuku']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('jenisPermohonan', $data['jenisPermohonan']);
        $this->db->bind('tgl_penyerahanBerkas', $data['tgl_penyerahanBerkas']);
        $this->db->bind('tglRekam', $data['tglrekam']);
        $this->db->bind('tgl_pengembalian', NULL);
        $this->db->bind('status', 'Belum Diambil');
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ambil($id)
    {
        $date = date('Y-m-d');
        $query = "UPDATE `$this->table` SET `status` = 'Sudah Diambil', tgl_pengambilan = '$date' WHERE no_peminjamanBuku = '$id'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
