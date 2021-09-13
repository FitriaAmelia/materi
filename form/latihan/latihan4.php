<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 4</title>
</head>
<body>
    <form action="prolat.php" method="post"> 
    <fieldset> 
    <legend> 
    <h1>Soal No 4</h1> 
    </legend> 

    <table> 
     <tr>
     <td> <label for="nama"> Masukan Nama</label> </td> 
     <td>:</td> 
     <td><input type="text" name="nama" id="nama" required></td> 
     </tr>

     <tr> 
     <td>Masukan jenis kelamin</td> 
     <td>:</td>
     <td><label for="l">
     <input type="radio" name="jk" id="l" value="Laki-laki">Laki-laki</label>
     <td><label for="p">
     <input type="radio" name="jk" id="p" value="Perempuan">Perempuan</label>
     </td></tr> 

     <tr> 
     <td>Pilih Agama</td> 
     <td>:</td> 
     <td> <select name="agama" required> 
     <option value="">Pilih</option> 
     <option value="islam">Islam</option> 
     <option value="kristen">Kristen</option>
     <option value="katholik">Katholik</option>
     <option value="hindu">Hindu</option>
     <option value="budha">Budha</option>
     <option value="konguchu">Konguchu</option> 
     </select> 
     </td> 
     </tr> 

     <tr> 
     <td>Pilih Golongan</td> 
     <td>:</td> 
     <td> <select name="golongan" required> 
     <option value="">Pilih</option> 
     <option value="1">Golongan 1</option> 
     <option value="2">Golongan 2</option>
     <option value="3">Golongan 3</option>
     <option value="4">Golongan 4</option>
     </select> 
     </td> 
     </tr> 

     <tr> 
     <td> 
     <label for="jamkerja" value="173" min="173" required> 
     </td>
     </tr> 
     </table> 

     <button type="submit" name="hitung">Hitung</button> 
     </fieldset> 
     </form>
</body>
</html> 

