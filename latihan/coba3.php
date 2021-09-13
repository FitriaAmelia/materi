<?php
    $data = [
        ["namaMahasiswa" => "Ahmad",
         "MataKuliah" => [
                ["MataKuliah" => "Matematika"],
                ["MataKuliah" => "Biologi"],
                ["MataKuliah" => "RPL"]],
            "Hobi" => [
                ["Hobi" => "Renang"],
            ["Hobi" => "Futsal"],
            ],
            "namaDosen" => "Aceng Fikri"
        ],

            [ "namaMahasiswa" => "Lela",
            "MataKuliah" => [
                ["MataKuliah" => "Database"],
                ["MataKuliah" => "Sejarah"],
                ["MataKuliah" => "Fisika"]],
            "Hobi" => [ 
                ["Hobi" => "Voli"],
            ["Hobi" => "Nari"],
            ],
            "namaDosen" => "Aceng Fikri"
        ],

            [ "namaMahasiswa" => "Intan",
            "MataKuliah" => [
                ["MataKuliah" => "RPL"],
                ["MataKuliah" => "Manajemen"],
                ["MataKuliah" => "Administrasi"]],
            "Hobi" => [
                ["Hobi" => "Silat"],
            ["Hobi" => "Renang"],
            ],
            "namaDosen" => "Aceng Fikri"
        ],


       
            [ "namaMahasiswa" => "Aldi",
            "MataKuliah" => [
                ["MataKuliah" => "Bahasa Inggris"],
                ["MataKuliah" => "Matematika"],
                ["MataKuliah" => "PHP"]],
            "Hobi" => [
                ["Hobi" => "Renang"],
            ["Hobi" => "Futsal"],
            ],
            "namaDosen" => "Ujang Betok"
        ],

            [ "namaMahasiswa" => "Yani",
            "MataKuliah" => [
                ["MataKuliah" => "OOP"],
                ["MataKuliah" => "Sejarah"],
                ["MataKuliah" => "Biologi"]],
            "Hobi" => [
                ["Hobi" => "Traveling"],
            ["Hobi" => "Kuliner"],
            ],
            "namaDosen" => "Ujang Betok"
        ],

            [ "namaMahasiswa" => "Riri",
            "MataKuliah" => [
                ["MataKuliah" => "Fisika"],
            ["MataKuliah" => "Manajemen"],
            ["MataKuliah" => "Biologi"]],
            "Hobi" => [
                ["Hobi" => "Nyanyi"],
            ["Hobi" => "Dance"],
            ],
        ],
        "namaDosen" => "Ujang Betok"
    ];

   
    
?>
<html>

<head>
    <title>Document</title>
</head>
<body> 
    <legend>Data Mahasiswa</legend> 
    <table border="1" width="100%">
    <tr> 
    <th>Nomor</th>
       <th>Nama Mahasiswa</th> 
       <th>Nama Dosen</th>
       <th>Mata Kuliah</th> 
       <th>Hobi</th>
   </tr> 

    <tr> 
    <?php
    $no=1; ?>
    <?php
    foreach($data as $key => $menu) {
     foreach($menu['MataKuliah'] as $val) {
?><tr><td>
    <?php echo $no ++; ?></td>
    <td> <?php echo $val['namaMahasiswa'];?></td>
    <td> <?php echo $menu['namaDosen'];?></td>
    <?php echo "<td>" foreach $val['MataKuliah']?></td>

    <?php echo "<td>"; foreach($val['MataKuliah'] as $sub) {
        ?> <li><?php echo $sub['MataKuliah'];?></li> 
        <?php
    }
?> 
<?php echo "<td>;" 
foreach($val['Hobi'] as $hobi) {
    echo "<li>". $hobi['Hobi']."</li>";
}
    echo "</td>";
     }
    }
       
    ?>
</tr></td>
    
    </table> 
    
</body>
</html>


