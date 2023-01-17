<?php

abstract class Model
{
    protected $db;
    protected $table;
    abstract protected function table();

    public function __construct()
    {
        $this->db = new Database;
        $this->table();
    }
    
    public function all()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->all();
    }
    
    public function count()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->rowCount();
    }
    
    public function find($id)
    {
        $this->db->query("SELECT FROM $this->table WHERE 'id' = $id");
        return $this->db->first();
    }
    
    public function first()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->first();
    }
    
    public function destroy($id)
    {
        $query = "DELETE FROM $this->table
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function join($select = "*", $secondTable, $firstField, $secondField)
    {
        $this->db->query("SELECT $select
            FROM $this->table
            INNER JOIN $secondTable ON $this->table.$firstField=$secondTable.$secondField");
        return $this->db->all();
    }
}
