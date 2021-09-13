<?php 
    /*latihan 1*/
    $i = 2;

    do {
        echo "$i ";
        $i*=2;
    }  while ($i <= 130);
    echo "<br><br><hr>";

    /*latihan 2*/
    $i = 3125;
    do {
        echo "$i ";
        $i/=5;
    }  while ($i >= 5);
    echo "<br><br><hr>";

    /*latihan 3
    $hasil = [18, 45, 29, 61, 47, 34]
        */


    /*latihan 4*/
    
    for ($i=1; $i < 7; $i++){
        for ($a=1; $a < $i; $a++){
            echo "* ";
        }
        echo "<br><br>";
    }

    /*latihan 5
    for ($i=1; $i < 5; $i++){
    for ($a=1; $a > $i; $a--){
        echo "&nbsp";
    }
    echo "<br><br>";
    } */

    
?>