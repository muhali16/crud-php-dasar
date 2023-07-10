<?php

class Database
{
    private $username = "root";
    private $password = "";
    private $host = "localhost";
    private $dbname = "barang_db";
    public $connection;

    public function __construct() {
        return $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }

    public function connect() {
        if (!isset($this->connection)) {
            echo "Make connection";
            return $this->connection = new Database();
        }

        return $this->connection;
    }
}