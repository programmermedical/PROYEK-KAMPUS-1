<?php

interface  InterfaceDataPerkuliahan
{
    public function insertDataPerkuliahan(DataPerkuliahan $dP);

    public function updateDataPerkuliahan();

    public function deleteDataPerkuliahan();

    public function readDataPerkuliahan($query);
}
