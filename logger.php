<?php
$data = json_decode(file_get_contents("php://input"), true);
$log = date("Y-m-d H:i:s") . " | ";
$log .= "LAT: " . $data['lat'] . ", LON: " . $data['lon'];
$log .= " | UA: " . $data['userAgent'] . "\n";
file_put_contents("output.txt", $log, FILE_APPEND);
?>
