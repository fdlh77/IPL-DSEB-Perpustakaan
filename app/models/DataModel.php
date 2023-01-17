<?php

class DataModel extends Model
{
    public function table()
    {
        $this->table = 'admin';
    }

    public function foods()
    {
        $query = "SELECT food.id, food.fname, food.description, categories.name
            FROM food
            LEFT JOIN categories
            ON food.cat_id = categories.id";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->all();
    }

    public function insertFood($data)
    {
        $query = "INSERT INTO food VALUES (:id, :cat_id, :fname, :description)";
        $this->db->query($query);
        $this->db->bind('id', NULL);
        $this->db->bind('cat_id', $data['category']);
        $this->db->bind('fname', $data['name']);
        $this->db->bind('description', $data['desc']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteFood($id)
    {
        $query = "DELETE FROM food
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function foodWhereCategory($id)
    {
        $query = 'SELECT * FROM food WHERE cat_id = "'.$id.'"';

        $this->db->query($query);
        $this->db->execute();
        return $this->db->all();
    }

    public function category()
    {
        $query = "SELECT * FROM categories";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->all();
    }

    public function insertCategory($data)
    {
        $query = "INSERT INTO categories VALUES (:id, :name, :short_desc, :long_desc)";
        $this->db->query($query);
        $this->db->bind('id', NULL);
        $this->db->bind('name', $data['name']);
        $this->db->bind('short_desc', $data['short_desc']);
        $this->db->bind('long_desc', $data['long_desc']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteCategory($id)
    {
        $query = "DELETE FROM categories
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function order()
    {
        $query = "SELECT orders.order_id, orders.user_name, orders.timestamp, food.fname FROM orders LEFT JOIN food ON orders.food_id = food.id";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->all();
    }

    public function insertOrder($id)
    {
        $order_id = "ODR". random_int(100000, 999999);
        $query = "INSERT INTO orders VALUES (:id, :order_id, :user_id, :food_id, :user_name, :timestamp)";
        $this->db->query($query);
        $this->db->bind('id', NULL);
        $this->db->bind('order_id', $order_id);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->bind('food_id', $id);
        $this->db->bind('user_name', $_SESSION['user']);
        $this->db->bind('timestamp', date('d:M:Y H:i:s'));
        $this->db->execute();

        return $order_id;
    }

    public function insertDelivery($data)
    {
        $query = "INSERT INTO delivery VALUES (:id, :id_order, :nama, :email, :phone, :alamat, :harga, :type, :transaksi, :message)";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('id_order', $data['id_order']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('type', $data['type']);
        $this->db->bind('transaksi', $data['transaksi']);
        $this->db->bind('message', $data['message']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insertReservation($data)
    {
        $query = "INSERT INTO reservation VALUES (:id_reservation, :nama, :email, :phone, :tanggal, :time, :person, :message)";
        $this->db->query($query);
        $this->db->bind('id_reservation', $data['id_reservation']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('time', $data['time']);
        $this->db->bind('person', $data['person']);
        $this->db->bind('message', $data['message']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}