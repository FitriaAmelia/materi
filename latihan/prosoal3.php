<?php 
    if(isset($_POST['save']))
    {
        $nama = $_POST['nama'];
        $dosen = $_POST['dosen'];
        $matkul = $_POST['matkul'];
        $Hobi = $_POST['Hobi'];
        

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
    <legend>Data Mahasiswa</legend> 
    <table border=1>
    <tr> 
    <th>Nomor</th>
       <th>Nama Mahasiswa</th> 
       <th>Nama Dosen</th> 
       <th>Mata Kuliah</th>
       <th>Hobi</th> 
    </tr> 

    <?php 
    for ($array as $result) {
  }
    <tr>
     ?> 
    </table> 
    </fieldset>
</body>
</html>