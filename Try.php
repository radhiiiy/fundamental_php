<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        $x = 5;
        if($x % 5 == 0)
        echo "Bilangan $x adalah kelipatan 5";
?>
<br>
<?php
$x = 6;
if($x%2 == 0) echo "$x adalah bilangan genap";
else echo "$x adalah bilangan ganjil";
?>
<br>
<?php
$x = 86;
$y = 78;
$rata = ($x + $y) / 2;
if ($rata >= 0 && $rata <75) {
echo "Maaf Anda Tidak Lulus";
}
else if($rata >= 75 && $rata <= 100) {
echo "Anda Tidak Lulus";
}
else {
echo "Maaf Nilai yang anda inputkan salah";
}
?>
<br>
<?php
    $x = 31;
    echo "x = $x <br>";

    if ($x %2 == 0) {
        echo "$x adalah bilangan  genap";
    }else {
        echo "$x adalah bilangan genap";
    }

echo "<br><br>";

$tahun = "2019";
if ($tahun == "2014"){
    echo "sekarang adalah tahun 2014";
}elseif ($tahun == "2017"){
    echo "sekarang adalah tahun 2017";
}elseif ($tahun == "2018"){
    echo "sekarang adalah tahun 2018";
}elseif ($tahun == "2019"){
    echo "sekarang adalah tahun 2019";
}
?>




</body>
</html>