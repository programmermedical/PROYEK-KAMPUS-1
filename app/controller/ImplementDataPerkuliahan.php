<?php
// require '../../config/config.php';
include '../../database/config.php';
require 'InterfaceDataPerkuliahan.php';

class implementDataPerkuliahan extends Config implements InterfaceDataPerkuliahan
{
    public function insertDataPerkuliahan()
    {
    }
    public function updateDataPerkuliahan()
    {
    }
    public function deleteDataPerkuliahan()
    {
    }
    public function readDataPerkuliahan()
    {
        $query = mysqli_query($this->conn, 'SELECT * FROM prodi');
        while ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
            return $result;
        }
        // $result = mysqli_fetch_assoc($query);
        return $query;
    }
}
