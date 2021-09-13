<?php 

function nilaiMax($array) 
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
    if ($max < $array[$i])
    $max = $array[$i];
    return $max;
}

function nilaiMin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n ; $i++)
    if ($min > $array[$i])
    $min = $array[$i];
    return $min;
}

$array = array(90, 80, 60, 100, 127, 81, 51, 99);
echo "Nilai Maksimum : " .nilaiMax($array);
echo "<br>";
echo "Nilai Minimum : " .nilaiMin($array);
?>

    <?php 
    $list = (90, 80, 60, 100, 127, 81, 51, 99);

    echo "nilai terlkecil dari array diatas :" .min($list) . "<br>";
    echo "nilai terbesar dari array diatas :" .max($list) . "<br>";
    ?>