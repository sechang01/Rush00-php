<?php
    session_start();
    //print_r($_SESSION['coin_incart']);
    $coin = $_POST["coinvalue"];
    //echo $_POST["coinvalue"];
    $_SESSION["coin_incart"][$coin] += 1;
    $_SESSION["coin_instock"][$coin] -= 1;
    $_SESSION['total'][0] += ($_SESSION['coin_price'][$coin] * $_SESSION["coin_incart"][$coin]);

$file = fopen("data/cryptos.csv","w");

fputcsv($file, $_SESSION['opa']);
fputcsv($file, $_SESSION['total']);
fputcsv($file, $_SESSION['coin_instock']);
fputcsv($file, $_SESSION['coin_incart']);
fputcsv($file, $_SESSION['coin_price']);
fclose($file);
header("Location: index.php");
exit;
/*
*/
?>