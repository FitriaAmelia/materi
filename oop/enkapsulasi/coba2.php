<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
   <fieldset>
   <legend>Kucing</legend>
   <table> 
   <tr> 
   <td>warna kucing</td>
   <td>:</td>
   <td><input type="text" name="warna"></td>
   </tr>

   <tr> 
   <td>Jumlah Kaki</td>
   <td>:</td>
   <td><input type="text" name="jumlah"></td>
   </tr>
     
     <tr>
   <td></td><td></td>
   <td><input type="submit" name="submit" value="Submit"></td>
     </tr> 
    </table>
<?php 
if (isset($_POST['submit']))
{
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    class Kucing
    {
        public function __construct($warna, $jumlah)
        {
        $this->warna = $warna;
        $this->jumlah = $jumlah;

        
        }
        public function normal()
        {
            return " 4 Kucing Normal";

        }

        public function cingked()
        {
            return "3 Kucing Cingked";
        }

        public function siluman()
        {
            return "4 atau lebih <br> Kucing Siluman";
        }
    }

    




}
?>
</fieldset>
    </form>
</body>
</html