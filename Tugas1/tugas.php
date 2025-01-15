
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="" /> -->
    <title>Document</title>
</head>
<body>
    <p>
      <?php 

define(constant_name: "BONUS", value: 500000);
define(constant_name: "PPN", value: 0.12);


$GajiBersih = 0;
$Gaji = 5000000;
$JmlPryk = 1;


echo "Gaji anda adalah : " . $Gaji . "<br>";
 echo "Bonus Per Proyek ".BONUS."<br>";      
echo "Gaji anda setelah terkena pajak " . $GajiBersih = $Gaji + (BONUS * $JmlPryk) . "<br>";
echo "Gaji bersih anda adalah " . $GajiBersih 



?>
    <p/>
</body>
</html>




