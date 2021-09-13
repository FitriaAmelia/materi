<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $mobil = $_POST['mobil'];
        $jenisMobil = $_POST['jenisMobil'];
        $tglP = $_POST['tglP'];
        $plat = $_POST['plat'];
        $tglK = $_POST['tglK'];
        $supir = $_POST['supir'];
        $merkMobil = $_POST['merkMobil'];
        $penjamin = $_POST['penjamin'];
    }
        
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pro2.php" method="post">
<input type="hidden" name="nama" value=<?php echo "$nama";?> >
<input type="hidden" name="nik" value=<?php echo "$nik";?> >
<input type="hidden" name="jk" value=<?php echo "$jk";?> >
<input type="hidden" name="agama" value=<?php echo "$agama";?> >
<input type="hidden" name="mobil" value=<?php echo "$mobil";?> >
<input type="hidden" name="jenisMobil" value=<?php echo "$jenisMobil";?> >
<input type="hidden" name="tglP" value=<?php echo "$tglP";?> >
<input type="hidden" name="plat" value=<?php echo "$plat";?> >
<input type="hidden" name="tglK" value=<?php echo "$tglK";?> >
<input type="hidden" name="supir" value=<?php echo "$supir";?> >
<input type="hidden" name="merkMobil" value=<?php echo "$merkMobil";?> >
<input type="hidden" name="penjamin" value=<?php echo "$penjamin";?> >

    <table>
    <tr>
            <td>Tanggal Pengembalian</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpengembalian"></td>
            <td><input type="submit" name="proses"></td>
        </tr>
    </table>
</form>
</body>
</html>