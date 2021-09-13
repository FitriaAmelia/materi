<?php 
    if (isset($_POST['Pilih'])) {
        $film = $_POST['Kartun'];
        echo "Film Kartun Favorit Anda adalah : 
        <font colour=blue><b>$film</b></font>";
    }
?>