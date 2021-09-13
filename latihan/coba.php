<?php 
    $data = [
      [
            "namaDosen" => "Aceng Fikri",
            "siswa" => [
                [
                "nama" => "Ahmad",
                "matakuliah" => [
                    ["nama" => "Fisika"],
                    ["nama" => "RPL"],
                    ["nama" => "Matematika"],
                ],
                "hobi" => [
                    ["nama" => "Membaca"],
                    ["nama" => "Mengoding"],
                ],
            ]
            [
                "nama" => "Lela",
                "matakuliah" => [
                    ["nama" => "Database"],
                    ["nama" => "Ekonomi"],
                    ["nama" => "Sejarah"],
                ],
                "hobi" => [
                    ["nama" => "Berenang"],
                    ["nama" => "Membaca"],
                ],
            ]
              [
                "nama" => "Rendi",
                "matakuliah" => [
                    ["nama" => "Matematika"],
                    ["nama" => "Bahasa Indonesia"],
                    ["nama" => "PHP"],
                ],
                "hobi" => [
                    ["nama" => "Futsal"],
                    ["nama" => "Main Game"],
                ],
              ] 
            ];
        ] 




           ["namaDosen" => "Ujang Betok",
            "siswa" => [
                "nama" => "Andi",
                "matakuliah" => [
                    ["nama" => "Biologi"],
                    ["nama" => "Bahasa Inggris"],
                    ["nama" => "OOP"],
                ],
                "hobi" => [
                    ["nama" => "Berenang"],
                    ["nama" => "Futsal"],
                ],
                ]
                "siswa" => [
                    "nama" => "Riri",
                    "matakuliah" => [
                        ["nama" => "Fisika"],
                        ["nama" => "Bahasa Indonesia"],
                        ["nama" => "Sejarah"],
                    ],
                    "hobi" => [
                        ["nama" => "Membaca Novel"],
                        ["nama" => "Basket"],
                    ],
                    ]
                    "siswa" => [
                        "nama" => "Dendi",
                        "matakuliah" => [
                            ["nama" => "Ekonomi"],
                            ["nama" => "Biologi"],
                            ["nama" => "OOP"],
                        ],
                        "hobi" => [
                            ["nama" => "Voli"],
                            ["nama" => "Futsal"],
                        ],
                        ]
        ]
    ]

    $no = 1; 
    foreach ($data as $namadosen) {
       echo "Nama wali Dosen : " . $dosen['namaDosen'] . "<br>";
       echo "Daftar Mahasiswa : ";
       echo "<ul>";
       foreach ($dosen['siswa'] as $siswa) {
           echo "<li> Data ke-" . $no++ . "</li>";
           echo "Nama Mahasiwa :".$siswa['siswa'];
           echo "<br>Daftar Mata Kuliah :";
           echo "<ol>";

           foreach($siswa['matakuliah']$sub{
               
           })
       }
    } 
    
?>