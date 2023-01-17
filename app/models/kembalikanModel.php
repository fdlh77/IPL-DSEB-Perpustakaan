<?php

class kembalikanModel extends Model
{
    public function table()
    {
        $this->table = 'tb_pengembalianBuku';
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM tb_pengembalianBuku as p JOIN tb_peminjam as d ON p.nik=d.nik
        WHERE `nama` LIKE '%$keyword%'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->all();
    }

    public function getByID($id) {
        $query = "SELECT * FROM `$this->table` WHERE tb_pengembalianBuku = '$id'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->first();
    }

    public function delete($id)
    {
        $query = "DELETE FROM `$this->table`
            WHERE no_permohonanKk = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insert($data)
    {
        $query = "INSERT INTO `$this->table` VALUES (:no_permohonanKk, :nik, :jenisPermohonan, :tglPermohonan, :nomor_kk, :tgl_cetak, :nama_pengambil, :tgl_pengambilan, :status)";
        $this->db->query($query);
        $this->db->bind('no_permohonanKk', $data['no_permohonanKk']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('jenisPermohonan', $data['jenisPermohonan']);
        $this->db->bind('tglPermohonan', $data['tglPermohonan']);
        $this->db->bind('nomor_kk', $data['nomor_kk']);
        $this->db->bind('tgl_cetak', NULL);
        $this->db->bind('nama_pengambil', NULL);
        $this->db->bind('tgl_pengambilan', NULL);
        $this->db->bind('status', 'Belum Diambil');
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ambil($id, $data)
    {
        $nama = $data['penduduk']['nama'];
        $date = date('Y-m-d');
        $query = "UPDATE `$this->table` SET `status` = 'Sudah Diambil', tgl_cetak = '$date', nama_pengambil = '$nama', tgl_pengambilan = '$date' WHERE no_permohonanKk = '$id'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
