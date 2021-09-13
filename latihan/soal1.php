<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan array 1 dimensi</title>
</head>
<body>
    <fieldset> 
    <legend>Program Masuk Sekolah Favorit</legend>
    <form action="" method="post">
    <table>
    <tr> 
    <th>Masukan Jumlah Data</th> 
    <td>: <input type="number" name="jumlah"></td> 
    </tr> 
    <tr> 
    <th>
    <td>
        
    <button type="submit" name="simpan">Simpan</button> 
    <button type="reset">Reset</button>
    </td> 
    </tr> 
    </table> 
    </form> 
    </fieldset>

    <?php 
    if(isset($_POST['simpan'])) 
    {
        
        $row = $_POST['jumlah'];
    
    ?>

<fieldset> 
    <legend>Input Data Siswa</legend> 
    <table> 
    
    <form action="prosoal1.php" method="post">
    <?php 

    for($i = 1; $i <= $row; $i++)
    {
        ?>
        <tr> 
        <tr>
        <th colspan=2>Data ke-<?php echo $i; ?></th>

        <td><b>Nama</b></td>
        <td><input type="text" name="nama[]"></td>
        </tr> 
        <tr>
        <th colspan=2></th>
        <td><b>Asal Sekolah</b></td> 
        <td><input type="text" name="asalsekolah[]"></td>
        </tr>
        </tr>
        <tr>
        <th colspan=2></th>
        <th><b>Nilai Bahasa Indonesia</b></th>
        <td><input type="number" min="1" max="100" name="indo[]" required></td>
        </tr> 
        <tr>
        <th colspan=2></th>
        <td><b>Nilai Matematika</b></td> 
        <td><input type="number" min="1" max="100" name="mtk[]" required></td>
        </tr>
        </tr>
        <tr>
        <th colspan=2></th>
        <th><b>Nilai Bahasa Inggris</b></th>
        <td><input type="number" min="1" max="100" name="ingg[]"  required></td>
        </tr> 
        <tr>
        <th colspan=2></th>
        <td><b>Nilai IPA</b></td> 
        <td><input type="number" min="1" max="100" name="ipa[]"  required></td>
        </tr>
        </tr>
        <?php 
    }
    ?>
    <tr>
    <th></th>
    <center><td><button type="submit" name="save">Simpan</button></td></center>
</tr>

    </form>
    </table> 
    </fieldset> 
    <?php 
    }
    ?>
</body>
</html>
    

    