<?php
    $data = [
        ["dosen" => "Aceng Fikri",
         "submenu" => [
            [ "nama" => "Ahmad",
            "MataKuliah" => [
                ["MataKuliah" => "Matematika"],
                ["MataKuliah" => "Biologi"],
                ["MataKuliah" => "RPL"]],
            "Hobi" => [["Hobi" => "Renang"],
            ["Hobi" => "Futsal"]]],

            [ "nama" => "Lela",
            "MataKuliah" => [
                ["MataKuliah" => "Database"],
                ["MataKuliah" => "Sejarah"],
                ["MataKuliah" => "Fisika"]],
            "Hobi" => [["Hobi" => "Voli"],
            ["Hobi" => "Nari"]]],

            [ "nama" => "Intan",
            "MataKuliah" => [
                ["MataKuliah" => "RPL"],
                ["MataKuliah" => "Manajemen"],
                ["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Silat"],
            ["Hobi" => "Renang"]]],
        ]
        ],

        ["dosen" => "Ujang Betok",
         "submenu" => [
            [ "nama" => "Aldi",
            "MataKuliah" => [
                ["MataKuliah" => "Bahasa Inggris"],
                ["MataKuliah" => "Matematika"],
                ["MataKuliah" => "PHP"]],
            "Hobi" => [["Hobi" => "Renang"],
            ["Hobi" => "Futsal"]]],

            [ "nama" => "Yani",
            "MataKuliah" => [
                ["MataKuliah" => "OOP"],
                ["MataKuliah" => "Sejarah"],
                ["MataKuliah" => "Biologi"]],
            "Hobi" => [["Hobi" => "Traveling"],
            ["Hobi" => "Kuliner"]]],

            [ "nama" => "Riri",
            "MataKuliah" => [["MataKuliah" => "Fisika"],
            ["MataKuliah" => "Manajemen"],
            ["MataKuliah" => "Biologi"]],
            "Hobi" => [["Hobi" => "Nyanyi"],
            ["Hobi" => "Dance"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
        } 
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo "</ul>";
    }
?>