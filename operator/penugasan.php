<?php
    $uangUcup = 200000;
    $jajanminum = 15000;
    $jajansb = 25000;
    $musafir = 0.1;
    $nemuUang = 0.5;
    

    echo "uang ucup = <b>$uangUcup</b>";
    echo "<hr>";
    echo "jajan minum <b>$jajanminum</b><br>";
    $uangUcup -=$jajanminum;
    echo "sisa uang ucup jajan minum = <b>$uangUcup</b>"; 
    echo "<hr>";
    echo "jajan sosis bakar <b>$jajansb</b><br>";
    $uangUcup -=$jajansb;
    echo "Sisa uang Ucup jajan sosis bakar + minum = <b>$uangUcup</b>";
    echo "<hr>";

    $musafir *= $uangUcup;
    echo "Sedekah ke musafir 10% dari <b>$uangUcup</b> yaitu sebesar <b>$musafir</b> <br>";
    $uangUcup -= $musafir;
    echo "Sisa uang ucup = <b>$uangUcup</b>";
    echo "<hr>";

    $nemuUang *= $uangUcup;
    echo "Nemu uang dijalan sebesar 50% dari sisa uang Ucup <b>$uangUcup</b> yaitu sebesar <b>$nemuUang</b> <br>";
    echo "Sisa uang ucup sekarang = <b>$nemuUang</b> + <b>$uangUcup</b><br>";
    echo "<hr>";

    $nemuUang += $uangUcup;
    echo "total uang ucup adalah Rp. <b>$nemuUang</b>";
    echo "<hr>";
    

?>

