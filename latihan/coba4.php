<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Fitria Amelia",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika "],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Bermain"],
            ["Hobi" => "Traveling"]]],

            [ "nama" =>
             "Sila Ramadina",
            "MataKuliah" => [
            ["MataKuliah" => "Ipa"],
            ["MataKuliah" => "Ips"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Nari"],
            ["Hobi" => "Bermain"]]],

            [ "nama" => "Dina Amelia",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Menyanyi"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Kesyza Andriana H",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Silat"],
            ["Hobi" => "Bermain"]]],

            [ "nama" =>
             "Silvi Lestari",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "B indonesia"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Membaca"]]],

            [ "nama" => "Rifa Fauziah",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Voli"],
            ["Hobi" => "Menyanyi"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>