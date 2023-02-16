<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ile KDV Hesaplama</title>
</head>
<body>
<form action="#" method="POST">
    <label for="price">KDV'li hali hesaplanacak fiyatı giriniz.</label>
    <hr>
    <input type="text" name="price">
    <button type="submit">Hesapla</button>
</form>
<hr>
<?php
if ($_POST)
{
    $price = $_POST['price'];
    $kdvcalculate = (($price * 18) / 100);  // kdv oranını hesapla / %18 kdv oranı alındı
    $kdvincluded = ($price + $kdvcalculate);

    echo "KDV Hariç : ".$price."<br>";

    echo "KDV Fiyatı : ".$kdvcalculate."<br>";

    echo "KDV Dahil : ".$kdvincluded."<br>";
}
?>

</body>
</html>