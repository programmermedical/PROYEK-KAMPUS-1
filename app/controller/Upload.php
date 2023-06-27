<?php

// require_once 'config.php';

class Upload
{
    private $query;

    public function uploadData($data)
    {
        // global $conn;
        // $this->query = $data;
        $this->query = "INSERT INTO dokumen (nama, namaFile, size, berkas) VALUES ('" . $data['nama'] . "','" . $data['namaFile'] . "','" . $data['size'] . "','" . $data['berkas'] . "')";

        $conn = mysqli_connect("localhost", "root", "root", "db_kampus11");
        $stmt = mysqli_prepare($conn, $this->query);
        // $result = mysqli_stmt_bind_param($stmt, 'sss', $this->query);
        $stmt->execute();

        if (!$stmt) {
            return 0;
        } else {
            return 1;
        }
    }

    public function selectDokumen()
    {
        $query = "SELECT * FROM dokumen";
        $conn = mysqli_connect("localhost", "root", "root", "db_kampus11");
        $stmt = mysqli_query($conn, $query);
        if ($result = mysqli_fetch_assoc($stmt)) {
            $row[] = $result;
        }
        return $row;
    }

    public function download($file)
    {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Expires: 0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            return readfile($file);
        }
    }
}
