<?php 

    $menu = [
        [
            "nama" => "Beranda",
            "subMenu" =>[
                [
                    "nama" => "Olahraga",
                    "subMenu" => [
                        [
                            "nama" => "Bola"
                        ],
                        [
                            "nama" => "Bulu Tangkis"
                        ]
                    ]
                        ],
                        [
                            "nama" => "Politik",
                            "subMenu" => [
                                [
                                    "nama" => "Ekonomi"
                                ]
                            ]
                                ],
                                [
                                    "nama" => "Manca Negara",
                                    "subMenu" => [
                               [
                                  "nama" => "International"
                              ],
                          [
                                 "nama" => "world"
                       ]
                   ]
               ]
            ]
        ]
     ];

     foreach($menu as $val)
     {
         echo $val['nama']."<br>";
         echo "<ul>";
         foreach($val['subMenu'] as $menu)
         {
             echo "<li>". $menu['nama']."</li>";
             echo "<ol>";
             foreach($menu['subMenu'] as $sub)
             {
                 echo "</li>". $sub['nama']."</li>";
             }
             echo "</ol>";
         }
         echo "</ul>";
     }
?>