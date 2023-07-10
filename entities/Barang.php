<?php

namespace entities;

class Barang
{
    protected $database;
    public function __construct() {
        $this->database = new \Database();
    }
    public function query($queryString)
    {
        return mysqli_query($this->database->connect(), $queryString);
    }

    public function fetchAssocQuery($query) {
        return mysqli_fetch_assoc($query);
    }

}