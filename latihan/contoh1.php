<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Array</title>
</head>
<body>
    <fieldset> 
    <legend>Input Array</legend>
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
    <form action="contoh1pro.php" method="post">
    <?php 

    for($i = 1; $i <= $row; $i++)
    {
        ?>
        <tr> 
        <tr>
        <th colspan=2>Data ke-<?php echo $i; ?></th>
        <th>Nama</th>
        <td><input type="text" name="nama[]"></td>
        </tr> 
        <tr>
        <th colspan="2"></th> 
        <td>Kelas</td> 
        <td><input type="text" name="kelas[]"></td>
        </tr>
        </tr>
        <?php 
    }
    ?>
    
    <tr>
    <th></th>
    <td><button type="submit" name="save">Simpan</button></td>
</tr>

    </form>
    </table> 
    </fieldset> 
    <?php 
    }
    ?>
</body>
</html>