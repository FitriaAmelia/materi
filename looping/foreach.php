<?php 
    $books = [
        "Panduan Belajar PHP untuk Pemula",
        "Membangun Aplikasi web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat Bot dengan PHP",
    ];

    echo "<h5>Judul Buku PHP :</h5>";
    echo "<ul>";
    foreach ($books as $buku) {
        echo "<li>$buku</li>";
    }

    /* for ($i = 10; $i >=; $i--) {
        echo "$i";
    }
    echo "<br><br>";*/
?>