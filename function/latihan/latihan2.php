<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend><center><h3>Formulir Penghitungan Bangun Ruang Lingkaran</h3></center></legend>
<table> 
</table>
     Masukan bilangan 1 dan 2 : 
    <input type="number" name="jari"><br>
    <input type="submit" name="submit">


</fieldset>
</body>
</html>

<?php 
//Optional Parameter / Default Parameter 
function hitung($jari, $phi)
{
    return $jari = 10
           $luas = 2 * 3.14;
           $keliling = 2 * 3.14 * $jari;
    
} 

echo "luas lingkaran = $luas";
echo "keliling lingkaran = $keliling";






?>