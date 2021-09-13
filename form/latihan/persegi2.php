<?php 
    if(isset($_POST['save'])) {
        $sisi=$_POST['sisi'];
          
        $a = $sisi * $sisi;
        $b = 4 * $sisi;
    } 
    echo "luas= $a";
    echo "<br>keliling = $b";
?>