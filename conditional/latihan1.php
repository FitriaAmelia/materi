<?php
    $nilai = 50;
    $grade = " ";
    if ($nilai >= 90){
        echo "Jika Nilai $nilai, Grade A";
    } else if ($nilai >= 80) {
        echo "Jika Nilai $nilai, Grade B";
    } else if ($nilai >= 70) {
        echo "Jika Nilai $nilai, Grade C";
    } else if ($nilai >= 60) {
        echo "Jika Nilai $nilai, Grade D";

    }else{
        echo "Jika Nilai $nilai, Grade E";
    }
   
       
       switch ($grade) {
           case 'A' : $komentar = "Pertahankan"; break;
           case 'B' : $komentar = "Harus Lebih Baik Lagi"; break;
           case 'C' : $komentar = "Perbanyak Belajar"; break;
           case 'D' : $komentar = "Jangan Keseringan Main"; break;
           case 'E' : $komentar = "Kebanyakan Bolos"; break;
           default : $komentar  = "Format Tidak Sesuai";
       }
       echo "grade <b> $nilai </b> $komentar";

       echo "Nilai : <b>$nilai</b><br>";
       echo "Grade : <b>$grade</b><br>";
       echo "Keterangan : <b>$komentar</b>";



?>