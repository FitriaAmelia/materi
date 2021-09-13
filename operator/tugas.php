<?php
    $a = 1;
    $b = 9;
    $c = 10;
    $d = 11;

    echo "<br>$a < $c : ". ($a < $c);
    echo "<br>($b > $c) && ($c > $b) : ".(($b != $c) && ($c > $b));
    echo "<br>($c > $d) || ($b < $c) : ".(($c != $d) || ($b < $c));
    echo "<hr>";

    $tono = 10000;
    $tini = 8000;
    $toni = 15000;

    echo "<br>($toni > $tono) && ($toni > $tini) : ".(($toni != $tono) && ($toni > $tini));
    echo "<br>($toni > $tini) || ($toni < $tono) : ".(($toni != $tini) || ($toni < $tono));
    echo "<hr>";

    $user = "amel";
    $pass = 1234;
    echo "<br> Username $user";
    echo "<br> Passord $pass";
    echo "<br> Cek login : ".($user && $pass);
    echo "<hr>";

?>