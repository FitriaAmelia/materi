<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action ="masuk2.php" method="POST">
    <table> 
    <tr> 
    <td>Pilih program bangun ruang :</td>
    </td></td> 
    <td><select name ="pilihan" value="bidang" required> 
    <option value=""></option> 
    <option value=1>Luas & keliling segitiga</option> 
    <option value=2>Luas & keliling lingkaran</option>  
    <option value=3>Luas & keliling persegi</option>  
    <option value=4>Luas & keliling persegi panjang</option> 
    </select> 
    </td> 
    </tr> 
    </table> 
    <input type="submit" name="pilih" value="pilih"> 
    </form>
</body>
</html>