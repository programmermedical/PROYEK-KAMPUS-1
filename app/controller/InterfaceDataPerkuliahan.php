<?php

interface  InterfaceDataPerkuliahan
{
    public function insertDataPerkuliahan(DataPerkuliahan $dP);

    public function updateDataPerkuliahan(DataPerkuliahan $dP);

    public function deleteDataPerkuliahan();

    public function readDataPerkuliahan($query);
}
