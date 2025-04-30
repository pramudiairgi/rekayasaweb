<?php
// Buat variabel JSON
$jsonobject = '{"nama":"Irgi Pramudia","usia":25,"prodi":"Teknik Informatika","universitas":"Universitas Semarang"}';

// Decode ke PHP Object
$data_object = json_decode($jsonobject);

// Decode ke PHP Array
$data_array = json_decode($jsonobject, true);

// Akses nilai dari PHP Object
echo "<br><br>Akses nilai dari PHP Object:<br>";
echo "Nama: " . $data_object->nama . "<br>";
echo "Usia: " . $data_object->usia . "<br>";

// Akses nilai dari PHP Array
echo "<br>Akses nilai dari PHP Array:<br>";
echo "Nama: " . $data_array["nama"] . "<br>";
echo "Usia: " . $data_array["usia"] . "<br>";
