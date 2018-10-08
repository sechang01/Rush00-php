<?php
  session_start();
  if ($_SESSION["logged_on_user"] == ""){
    print ("<h1 align=\"center\">You must be logged in to validate order</h1>");
    return;
  }
  //add to order the current basket
  $neworder = array($_SESSION["basket"]);

  $fp = fopen('csv/orders.csv', 'w');
  fputcsv($fp, $newworder);
  print ("<h1 align=\"center\">Order has been taken. Thank You!</h1>");
  fclose($fp);

  if (file_exists('cryptos.csv'))
    unlink('cryptos.csv');
  $_SESSION["basket"] = array(0, 0, 0, 0, 0, 0,);
  return;

 ?>
