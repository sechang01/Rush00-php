<?php
session_start();
/*$_SESSION["opa1"] = 100;
$_SESSION["opa2"] = 100;
$_SESSION["opa3"] = 100;
$_SESSION["opaep"] = 100;
$_SESSION["total"] = 0;//$_SESSION["coin_incart"][$i] * $coin_price[$i];
$_SESSION["coin_instock"] = array("1030", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100", "100w", "100");
$_SESSION["coin_incart"] = array("123", "990", "42", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0");
$_SESSION["coin_price"] = array("6577.85", "0.23", "0.18", "0.01", "0.03", "1.70", "224.63", "0.80", "114.00", "1.91", "0.01", "0.66", "0.65", "0.01", "509.81", "1.32", "125.39", "0.01", "0.39", "3.74", "0.92", "17.93", "0.99", "0.02");
*/
$_SESSION['opa'] = array();
$_SESSION['total'] = array();
$_SESSION['coin_instock'] = array();
$_SESSION['coin_incart'] = array();
$_SESSION['coin_price'] = array();
$file = fopen("data/cryptos.csv","r");

//while(! feof($file))
//  {
  $_SESSION['opa'] = fgetcsv($file);
  $_SESSION['total'] = fgetcsv($file);
  //print_r($_SESSION['total']);
  $_SESSION['coin_instock'] = fgetcsv($file);
  $_SESSION['coin_incart'] = fgetcsv($file);
  //print_r($_SESSION['coin_incart']);
  $_SESSION['coin_price'] = fgetcsv($file);

 // print_r(fgetcsv($file));
 // print_r(fgetcsv($file));
 // }
//fclose($file);
?>