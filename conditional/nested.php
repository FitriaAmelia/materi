<?php
    $sim = "Ya";
    $stnk = "Tidak";

    //pengecekan kelengkapan surat kendaraan
    if ($sim == "Ya") {
        if ($stnk == "Ya") {
            echo "Selamat menjalankan aktifitas,
            hati-hati berkendara";
        } else {
            echo "Maaf anda kami tilang!";
        }

    } else {
        echo "Maaf Anda Kami Tilang";
    }
?>