<?php
  include "auth.php";
  include "login.php";
  include "create.php";
  include "init.php";

  session_start();
  if (isset($_POST["login"]) && isset($_POST["password"]) && $_POST["submit"] == "Login / Register"){
    //if file doesnt exist create file
    if (!file_exists("./passwd")){
      file_put_contents("./passwd");
      inita("lord", "gabin");
    }

    $contents = unserialize(file_get_contents("./passwd"));
    //if user exists in file print error
    //0 = login doesnt exists, 1 = user does exist and passwd correct, 2 = user exist passwd incorrect
    $response = auth($_POST["login"], $_POST["password"], $contents);
    if ($response == 0){
        create($_POST["login"], $_POST["password"], $contents);
        print ("Account Created\n");
    }
    else if ($response == 1){
        login ($_POST["login"]);
        print ("Login Successful\n");
    }
    else {
        print ("Incorrect Password\n");
        return;
    }
  }
  else {
    print ("Field not properly filled");
  }

 ?>
