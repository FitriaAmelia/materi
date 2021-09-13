<?php 
// Looping PHP JSON

$dataMhs = '[
    {"nama":"Mahmud", "Domisili":"Bandung"},
    {"nama":"Udin", "Domisili":"Tasik"},
    {"nama":"Encep", "Domisili":"Majalaya"},
    {"nama":"Entis", "Domisili":"Ciamis"}
]';

$data = json_decode($dataMhs);
foreach ($data as $mhs) {
    echo "Nama : " . $mhs->nama . "<br>";
    echo "Domisili : " . $mhs->Domisili;
    echo "<hr>";
}