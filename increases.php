<?php
    session_start();
    print_r($_SESSION['coin_instock']);
    print_r($_SESSION['coin_instock']);
    print_r($_SESSION['coin_instock']);
    print_r($_SESSION['coin_instock']);
    print_r($_SESSION['coin_instock']);
    $coin = $_POST["coinvalue"];
    $_SESSION["coin_incart"][$coin] += 1;

$file = fopen("cryptos2.csv","w");

foreach ($_SESSION['opa'] as $line)
{
fputcsv($file,explode(',',$line));
}

foreach ($_SESSION['total'] as $line)
{
fputcsv($file,explode(',',$line));
}

foreach ($_SESSION['coin_instock'] as $line)
{
fputcsv($file,explode(',',$line));
}

foreach ($_SESSION['coin_incart'] as $line)
{
fputcsv($file,explode(',',$line));
}

foreach ($_SESSION['coin_price'] as $line)
{
fputcsv($file,explode(',',$line));
}
 
fclose($file);
/*

$_SESSION['opa'] = array();
$_SESSION['coin_instock'] = array();
$_SESSION['coin_incart'] = array();
$_SESSION['coin_price'] = array();

*/
?>
