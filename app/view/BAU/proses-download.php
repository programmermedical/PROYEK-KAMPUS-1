<?php
require_once '../../controller/Upload.php';

$file = $_GET['url'];

$implements = new Upload();
$result = $implements->download($file);
