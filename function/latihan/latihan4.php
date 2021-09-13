<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
    <td>Masukan Bilangan : </td>
<input type="number" name="bil1"><br>
<td>Masukan Perpangkatan</td>
<input type="number" name="bil2"><br>
<input type="submit" name="submit" value="masuk">
</form>
</body>
</html>

<?php 


  
if(isset($_POST['submit'])) {
    $bilangan = $_POST['bil1'];
    $pangkat = $_POST['bil2'];

    function Perpangkatan($bilangan, $pangkat) {
        $hasil = $bilangan ** $pangkat;
        $hasil = " Hasil Perpangkatan dari " . $bilangan. " dan ".$pangkat. " adalah : $hasil ";
        return $hasil;
    }
    echo Perpangkatan($bilangan, $pangkat);
}    


//cara agar tampilan pangkatnya berulang
    function pangkat($bil, $pangkat)
{
    if ($pangkat > 1) {
        return $bil * $pangkat($bil, $pangkat - 1);
    } else {
        return $bil;
    }

}
function pangkatnya($bil, $pangkat)
{
    for ($i = 1; $i <= $pangkat; $i++) {
        echo " x ";

    }
  }
}
echo "hasil dari perkalian<br>";
echo pangkatnya($bil, $pangkat);
$hasil = pangkat($bil, $pangkat);
echo " = " . $hasil;
}

?>


