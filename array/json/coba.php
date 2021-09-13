<?php 

    $datafilm = 
 '{
  "Instructions": "delete everything in this object and make your own JSON object using different data.",
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
  ],
  "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party,
   Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. 
   The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
  "Language": "English",
  "Country": "USA",
  "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
  "Poster": "https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
  "imdbRating": "8.1",
  "imdbVotes": "183,131",
  "imdbID": "tt0061722"
}';

$film = json_decode($datafilm);


    ?>

    
    <html>
    <body>
        <h2><center>Data Film</center></h2>
        <h3><center>The Graduate</center></h3>
    </body>
    </html> 
    
     <?php
    

     echo "Tahun Rilis : " . $film->Year . "<br>";
     echo "Tanggal Rilis : " . $film->Released . "<br>";
     echo "Durasi Film : " . $film->Runtime . "<br>";
     echo "Kategori Film : " . implode($film->Genre) . "<br>";
     echo "Direktur : " . $film->Director . "<br>";
     echo "Penulis : " . implode($film->Writers) . "<br>";
     echo "Pemeran : " . implode($film->Actors) . "<br>";
     echo "Bahasa : " . $film->Language . "<br>";
     echo "Negara : " . $film->Country . "<br>";
     echo "Penghargaan : " . $film->Awards . "<br>";
     echo "Nilai : " . $film->imdbRating . "<br>";
     echo "Vote : " . $film->imdbVotes . "<br>";
     echo "ID : " . $film->imdbID . "<br>";

     ?>



td>Kategori</td>
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
    <td><?php echo "" . implode($film->) . "<br>"?></td>
    </tr>
