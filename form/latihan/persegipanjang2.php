<?php 
    if(isset($_POST['save'])) {
        $panjang=$_POST['panjang'];
        $lebar=$_POST['lebar'];
        

        $a = $panjang * $lebar;
        $s = 2 * $panjang + $lebar;

    } 
    echo "luas= $a";
    echo "<br>keliling = $s";
?>  
