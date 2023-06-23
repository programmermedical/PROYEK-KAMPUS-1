<?php

class Config
{

    private $hostname = 'localhost',
        $username = 'root',
        $password = 'root',
        $database = 'db_kampus1';
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        if ($this->conn == false) die("koneksi tidak bisa terhubung ke" . $this->conn . mysqli_connect_error());
        // $this->conn = mysqli_connect("localhost", "root", "root", "db_kampus1");
    }
}
