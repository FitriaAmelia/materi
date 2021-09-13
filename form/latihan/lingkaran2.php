<?php 
    if(isset($_POST['save'])) {
        $jari=$_POST['jari'];

        $i = 2 * 3.14;
        $j = 2 * 3.14 * $jari;

    } 
    echo "luas= $i";
    echo "<br>keliling = $j";
?>  