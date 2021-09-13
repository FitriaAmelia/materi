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
    <legend>Data</legend>
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
    <legend>Input Data Mahasiswa</legend> 
    <table> 
    
    <form action="prosoal3.php" method="post">
    <?php 

    for($i = 1; $i <= $row; $i++)
    {
        ?>
        <tr> 
        <tr>
        <th colspan=2>Data ke-<?php echo $i; ?></th>

        <td><b>Nama Mahasiswa</b></td>
        <td><input type="text" name="nama[]"></td>
        </tr> 
        <tr>
        <th colspan=2></th>
        <td><b>Nama Dosen</b></td> 
        <td><input type="text" name="dosen[]"></td>
        </tr>
        </tr>
        <tr>
        <th colspan=2></th>
        <th><b>Mata Kuliah</b></th>
        <td><select name="matkul">
        <option value="Fisika">Fisika</option>
        <option value="Biologi">Biologi</option>
        <option value="Matematika">Matematika</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Sejarah">Sejarah</option>
        <option value="Inggris">Inggris</option>
        </select> </td>
        </tr> 
        <tr>
        <th colspan=2></th>
        <td><b>Hobi</b></td> 
        <td><select name="Hobi">
        <option value="Berenang">Berenang</option>
        <option value="Futsal">Futsal</option>
        <option value="Menyanyi">Menyanyi</option>
        <option value="Game">Game</option>
        <option value="Menari">Menari</option>
        <option value="Membaca">Membaca</option>
        </select> </td>
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