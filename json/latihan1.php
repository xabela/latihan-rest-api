<?php
// $mahasiswa = [
//     [
//         "nama" => "bela",
//         "nim" => 175150201111082,
//         "jurusan" => "TIF"
//     ],
//     [
//         "nama" => "bela",
//         "nim" => 175150201111082,
//         "jurusan" => "TIF"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', 'man3malang');
$db = $dbh->prepare("SELECT * FROM data_mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
print($data);
