<?php 
$dataJson = '{
    "nama":"Ujang", 
    "domisili":"Bandung",
    "usia":23, 
    "wni":true,
    "hobi":[
        "Futsal", "Main Game", "Main Kelereng"
        ]

}';

$data = json_decode($dataJson);
//echo $data->nama;
echo "Nama : " . $data->nama . "<br>";
echo "Usia : ". $data->usia . "<br>";
echo "Domisili : " . $data->domisili . "<br>";

echo "Hobi : " . implode(", ", $data->hobi);