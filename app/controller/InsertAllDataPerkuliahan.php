<?php

// class InsertAllDataPerkuliahan extends implementDataPerkuliahan
// {
//     public $query;

//     public function InsertAll(DataPerkuliahan $Dp)
//     {
//         if (parent::insertDataPerkuliahan($Dp)) {
//             $query = "INSERT INTO ruangan (ruangan) VALUES (?)";
//             $stmt = mysqli_prepare($this->conn, $query);
//             $stmt->bind_param('s', $ruangan);
//             $ruangan = $Dp->getRuangan();
//             $stmt->execute();
//             $stmt->close();
//             // $this->conn->close();
//         }
//     }
// }
