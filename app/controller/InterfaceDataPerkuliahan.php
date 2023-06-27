<?php

interface  InterfaceDataPerkuliahan
{
    public function insertDataPerkuliahan(DataPerkuliahan $dP);

    public function updateDataPerkuliahan(DataPerkuliahan $dP);

    public function deleteDataPerkuliahan(DataPerkuliahan $dP);

    public function readDataPerkuliahan($query);
}
