<?php
abstract class Api
{
    private $db;

    public function __construct(ConnectionInterface $connection){
        $this->db=$connection;
        $this->db = $this->db->getConnection();
    }

    public function getItem(){}
    public function getSingleItem(){}
    public function createItem(){}
    public function updateItem(){}
    public function deleteItem(){}
}