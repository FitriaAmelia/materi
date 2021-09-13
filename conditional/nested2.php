<?php 
    $member = "tidak";
    $totalBelanja = 50000;
    $disc = 0;
    $totalharga = 0;

    if ($member == "ya") {
        if ($totalBelanja >= 250000) {
            $disc = 0.1 * $totalBelanja;
        } else if ($totalBelanja >= 100000){
            $disc = 0.05 * $totalBelanja;
        }
    } else {
        if ($totalBelanja >= 100000) {
            $disc = 0.25 * $totalBelanja;
        }
    }
    $totalBelanja >= 100000 - $disc;
    echo "Kartu Member : $member<br>";
    echo "Total Belanja: $totalBelanja<br>";
    echo "diskon : $disc<br>";
    echo "Total yang harus dibayar : $totalharga<br>";
?>