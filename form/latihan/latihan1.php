<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengolahan Form</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
    Masukan bilangan 1 dan 2 : 
    <input type="number" name="bil1"><br>
    <input type="number" name="bil2"><br>
    <input type="submit" name="Input" value="Input">
    </FORM>
</body>
</html>

<?php 
if (isset($_POST['Input'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $a = $bil1 + $bil2;
    $b = $bil1 - $bil2;
    $c = $bil1 * $bil2;
    $d = $bil1 / $bil2;

    echo "bilangan 1 + bilangan 2 = $a<br>";
    echo "bilangan 1 - bilangan 2 = $b<br>";
    echo "bilangan 1 * bilangan 2 = $c<br>";
    echo "bilangan 1 / bilangan 2 = $d<br>";
}
?>