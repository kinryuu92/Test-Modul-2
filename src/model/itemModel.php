<?php

namespace App\model;
use PDO;

class itemModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Items";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function addItems($items_id, $items_name, $item, $price, $amount,$date_created,$item_description)
    {
        $sql = 'INSERT INTO Items (`items_id`,`items_name`,`item`,`price`,`amount`,`date_created`,`item_description`)
                VALUES(:items_id,:items_name,:item,:price,:amount,:date_created,:item_description)';

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":items_id", $items_id);
        $stmt->bindParam(":items_name", $items_name);
        $stmt->bindParam(":item", $item);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":amount", $amount);
        $stmt->bindParam(":date_created", $date_created);
        $stmt->bindParam(":item_description", $item_description);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteItems($id)
    {
        $sql = 'DELETE FROM Items where id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

    }

    public function getById($id)
    {
        $sql = "Select * FROM Items WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function editItems($id, $items_id, $items_name, $item, $price, $amount,$date_created,$item_description)

    {
        $sql = 'UPDATE Items SET `items_id`=:items_id,`items_name`=:items_name,`item`=:item,`price`=:price,`amount`=:amount,`date_created`=:date_created,`item_description`=:item_description where `id`=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':items_id', $items_id);
        $stmt->bindParam(':items_name', $items_name);
        $stmt->bindParam(':item', $item);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':date_created', $date_created);
        $stmt->bindParam(':item_description', $item_description);
        $stmt->execute();
    }
    public function searchItem($search)
    {
        $sql = "SELECT * FROM Items WHERE items_name LIKE '$search%'" ;
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }


}
