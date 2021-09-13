<?php
$dataFilem ='{

"Title": "The Graduate",
"Year": "1967",
"Rated": "Approved",
"Released": "22 Dec 1967",
"Runtime": "106 min",
"Genre": [
"Comedy",
"Drama",
"Romance"
],
"Director": "Mike Nichols",
  "Writers": [
    "Calder Willingham (screenplay)",
    "Buck Henry (screenplay)",
    "Charles Webb (based on the novel by)"
  ],
  "Actors": [
    "Anne Bancroft",
    "Dustin Hoffman",
    "Katharine Ross",
    "William Daniels"
  ]
  
  
  
}';
$film = json_decode($dataFilem);
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
<center>
<img src="spiderman.jpg" alt="" width="200" >
</center>
    <fieldset>
<legend><center><h2>Data Filem</h2></center></legend>
<table>
<tr>
    <td>Judul Filem</td>
    <td>:</td>
    <td><?php echo $film->Title ?></td>
</tr>
<tr>
    <td>Tahun Rilis</td>
    <td>:</td>
    <td><?php echo $film->Year ?></td>
</tr>
<tr>
    <td>Tanggal Rilis</td>
    <td>:</td>
    <td><?php echo $film->Released ?></td>
</tr>
<tr>
    <td>Durasi</td>
    <td>:</td>
    <td><?php echo $film->Runtime ?></td>
</tr>

    <td>Kategori</td>
    <td>:</td>
    <td><?php echo "" . implode($film->Genre) . "<br>"?></td>
    </tr>
    
    <tr>
    <td>Direktur</td>
    <td>:</td>
    <td><?php echo $film->Director?></td>
    </tr> 

     <tr>
     <td>Pemeran</td> 
     <td>:</td> 
     <td><?php echo "" . implode($film->Actors) . "<br>"?></td>
     </tr>

      

    



</table>


    </fieldset>
</body>
</html>