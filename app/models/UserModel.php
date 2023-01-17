<?php

class UserModel extends Model
{
    public function table()
    {
        $this->table = 'tb_user';
    }

    public function check($data)
    {
        $query = "SELECT * FROM `$this->table` WHERE `userID` = '$data[username]'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->first();
    }
}
