<?php


namespace APP\Model\DAO;

use APP\Model\Connection;
use PDO;

class AddressDAO implements DAO
{
    public function insert($object)
    {
        $connection = Connection::getConnection($object);
        $stmt = $connection->prepare("INSERT INTO address VALUES(null,?,?,?,?,?,?,?);");
        $stmt->bindParam(1, $object->public_place);
        $stmt->bindParam(2, $object->street_name);
        $stmt->bindParam(3, $object->number_of_street);
        $stmt->bindParam(4, $object->complement);
        $stmt->bindParam(5, $object->neighborhood);
        $stmt->bindParam(6, $object->city);
        $stmt->bindParam(7, $object->zip_code);
        return $stmt->execute();
    }
    public function findOne($id)
    {

    }
    public function findAll()
    {

    }
    public function update($object)
    {

    }
    public function delete($id)
    {
        
    }

    public function findId()
    {
        $connection = Connection::getConnection();
        $result = $connection->query("SELECT max(address_code) as id FROM address;");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}