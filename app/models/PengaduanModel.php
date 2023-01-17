<?php

class PengaduanModel extends Model
{
    public function table()
    {
        $this->table = 'pengaduan2';
    }

    public function insert($data)
    {
        $query = "INSERT INTO `$this->table` VALUES (:id_pengaduan, :tgl_pengaduan, :no_telpon, :nama, :pengaduan)";
        $this->db->query($query);
        $this->db->bind('id_pengaduan', NULL);
        $this->db->bind('tgl_pengaduan', $data['tgl_pengaduan']);
        $this->db->bind('no_telpon', $data['no_telpon']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('pengaduan', $data['pengaduan']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}