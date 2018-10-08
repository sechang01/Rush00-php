<?php
    session_start();
    //print_r($_SESSION['coin_incart']);
    if(isset($_POST['t1']) && $_POST['t1'] == "Tier 1")
    {
        if ($_SESSION['opa'][0] == 0)
            $_SESSION['opa'][0] = 100;
        else
            $_SESSION['opa'][0] = 0;
    }
    if(isset($_POST['t2']) && $_POST['t2'] == "Tier 2")
    {
        if ($_SESSION['opa'][1] == 0)
            $_SESSION['opa'][1] = 100;
        else
            $_SESSION['opa'][1] = 0;
    }
    if(isset($_POST['t3']) && $_POST['t3'] == "Tier 3")
    {
        if ($_SESSION['opa'][2] == 0)
            $_SESSION['opa'][2] = 100;
        else
            $_SESSION['opa'][2] = 0;
    }
    if(isset($_POST['ep']) && $_POST['ep'] == "Editor")
    {
        if ($_SESSION['opa'][3] == 0)
            $_SESSION['opa'][3] = 100;
        else
            $_SESSION['opa'][3] = 0;
    }
/*
    if(isset($_POST['t2']))
    if(isset($_POST['t3'])) 

    if(isset($_POST['ep'])) 

    $checkbox = $_POST["tier"];
    if ($checkbox == "Tier 1")
        $_SESSION['opa'][0] = 0;
    else if ($checkbox == "Tier 2")
        $_SESSION['opa'][0] = 0;
    else if ($checkbox == "Tier 3")
        $_SESSION['opa'][0] = 0;

    else if ($checkbox == "Editor")
        $_SESSION['opa'][0] = 0;
*/
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