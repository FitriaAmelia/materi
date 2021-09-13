<?php 
    if(isset($_POST['save']))
    {
        $nama = $_POST['nama'];
        $asalsekolah = $_POST['asalsekolah'];
        $indo = $_POST['indo'];
        $mtk = $_POST['mtk'];
        $ingg = $_POST['ingg'];
        $ipa = $_POST['ipa'];
        $totalnilai = 0;
        $keterangan = "";

        echo "<pre>"; 
       
        echo "</pre>";
    }
?>
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
    <legend>Data Siswa</legend> 
    <table border=1>
    <tr> 
    <th>Nomor</th>
       <th>Nama</th> 
       <th>Asal Sekolah</th> 
       <th>Nilai Bahasa Indonesia</th>
       <th>Nilai Matematika</th> 
       <th>Nilai Bahasa Inggris</th> 
       <th>Nilai IPA</th>
       <th>Jumlah Nilai</th> 
       <th>Keterangan</th>
    </tr> 

    <?php 
    $no=1; 
    for($i = 0; $i < count($nama); $i++){?>
    <tr> 
       <td><?php echo $no++; ?></td> 
       <td><?php echo $nama[$i]; ?></td>
       <td><?php echo $asalsekolah[$i]; ?></td> 
       <td><?php echo $indo[$i]; ?></td> 
       <td><?php echo $mtk[$i]; ?></td> 
       <td><?php echo $ingg[$i]; ?></td> 
       <td><?php echo $ipa[$i]; ?></td>
       <?php $totalnilai = $indo[$i] + $mtk[$i] + $ingg[$i] + $ipa[$i];
       if($totalnilai > 340)
       {
           $keterangan = "Diterima";
       } else {
           $keterangan = "Tidak Diterima";
       }
?>
<td><?php echo $totalnilai; ?></td> 
<td><?php echo $keterangan; ?></td> 
    </tr> 
    <?php } ?> 
    </table> 
    </fieldset>
</body>
</html>