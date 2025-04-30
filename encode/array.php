<?php
// variabel array
$data_array = [
    "nama" => "Irgi Pramudia",
    "usia" => 25,
    "prodi" => "Teknik Informatika",
    "universitas" => "Universitas Semarang"
];

// Encode array ke format JSON
$json_encoded = json_encode($data_array);

// Tampilkan hasil encode
echo "Hasil JSON Encode:<br>";
echo $json_encoded;
