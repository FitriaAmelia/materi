<?php 
    //ini adalah array matrik
    $matrik = [
        [2, 3, 4],
        [7, 5, 0],
        [4, 3, 8]
    ];

    /*echo $matrik[1][0];
    echo $matrik[0][2];*/

    foreach($matrik as $key => $val) {
        echo "baris $key : $val[0], $val[1], $val[2]<br>";

    }
?>