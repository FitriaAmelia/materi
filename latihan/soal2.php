<?php 

    $dosen = [
        
          ["nama" => "Aceng Fikri",
            "subMenu" =>[
                [ "nama" => "Ahmad",
                    "subMenu" => [
                        
                        ["nama" => "RPL"],
                        ["nama" => "Database"],
                        ["nama" => "OOP"],
                        
                        ["nama" => "Hobi : Membaca, Mengoding"]
                    ]
                        ],
                        [ "nama" => "Andi",
                            "subMenu" => [
                                ["nama" => "MySQL"],
                                ["nama" => "RPL"],
                                ["nama" => "PHP"],
                                [
                                    "nama" => "Hobi : Mendesain, Membaca"
                                ]
                            ]
                                ],
                          [ "nama" => "Aldi",
                               "subMenu" => [
                               ["nama" => "OOP"],
                               ["nama" => "PHP" ],
                               ["nama" => "Database" ],
                                ["nama" => "Hobi : Membuat web , Mendesain"]
                            ]
                               ]
                            ],

        ]

              ["nama" => "Ujang Betok",
               "subMenu" =>[
                [ "nama" => "Rahman",
                "subMenu" => [
                    
                    ["nama" => "RPL"],
                    ["nama" => "Database"],
                    ["nama" => "OOP"],
                    
                    ["nama" => "Hobi : Membaca, Mengoding"]
                ]
                    ],
                    [ "nama" => "Rendi",
                        "subMenu" => [
                            ["nama" => "MySQL"],
                            ["nama" => "RPL"],
                            ["nama" => "PHP"],
                            [
                                "nama" => "Hobi : Mendesain, Membaca"
                            ]
                        ]
                            ],
                      [ "nama" => "Septi",
                           "subMenu" => [
                           ["nama" => "OOP"],
                           ["nama" => "PHP" ],
                           ["nama" => "Database" ],
                            ["nama" => "Hobi : Membuat web , Mendesain"]
                        ]
                  ]
          ],

      ]
     ];

      $no :1;
     foreach($dosen as $key => $val)
     {
            echo "Nama wali Dosen : " . $val['nama'] . "<br>";
            echo "Daftar Mahasiswa : ";
            echo "<ul>";
            foreach ($val['subMenu'] as $menu) {
                echo "<li> Data ke-" . $no++ . "<br>";
                
            }
         } 
         



     ?>