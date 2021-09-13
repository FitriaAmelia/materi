<?php   
    $tahun = date('Y');
    $kabisat = $tahun % 4 == 0;
    $jaab = $kabisat ? " iya": "Bukan Tahun Kabisat";
    echo $tahun. "<br>";
    echo "Tahun Kabisat :".$jaab;
    echo "<br>";
    ?>