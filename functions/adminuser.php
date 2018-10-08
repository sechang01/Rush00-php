<?php
  include "auth.php";
  include "login.php";
  include "create.php";
  include "init.php";

  if (!isset($_POST["submit"]))
      print ("Error\n");
  //checking database to see if present
  if (!file_exists("./passwd")){
    file_put_contents("./passwd");
    inita("lord", "gabin");
  }

  //read database and store in variable
  $contents = unserialize(file_get_contents("./passwd"));
  if ($_POST["submit"] == "Create"){
      if (!isset($_POST["login"]) || !isset($_POST["new_passwd"])){
        print ("<h1 align=\"center\">Please provide username and password</h1>");
        return;
      }
      //if user exists in file print error
      //0 = login doesnt exists, 1 = user does exist and passwd correct, 2 = user exist passwd incorrect
      $response = auth($_POST["login"], $_POST["new_passwd"], $contents);
      if ($response == 0){
          create($_POST["login"], $_POST["new_passwd"], $contents);
          print ("<h1 align=\"center\">Account Created</h1>");
      }
      else
          print ("<h1 align=\"center\">Username already taken</h1>");
  }
  //Delete user
  else if ($_POST["submit"] == "Delete"){
      if (!isset($_POST["login"])){
        print ("<h1 align=\"center\">Please provide username</h1>");
        return;
      }
      //check if user exists
      foreach ($contents as $key => $value){
        if ($value["login"] == $_POST["login"]){
          unset($contents[$key]);
          file_put_contents("./passwd", serialize($contents));
          print ("<h1 align=\"center\">Account Successfully Deleted</h1>");
          return;
        }
      }
      print ("<h1 align=\"center\">User Non-Existent</h1>");
  }
  //modify existing user
  else if ($_POST["submit"] == "Modify"){
    if (!isset($_POST["login"]) || !isset($_POST["new_passwd"]) || !isset($_POST["old_passwd"])){
      print ("<h1 align=\"center\">Pleases provide all fields</h1>");
      return;
    }
    $flag = 1;
    //if user exists in file print error
    foreach ($contents as &$row)
    {
        if ($row["login"] == $_POST["login"]){
          if ($row["passwd"] == hash("whirlpool", $_POST["old_passwd"])){
            $row["passwd"] = hash("whirlpool", $_POST["new_passwd"]);
            $flag = 0;
          }
        }
    }
    if ($flag == 1){
      print("<h1 align=\"center\">User Non-Existent or Password Incorrect</h1>");
      return;
    }
    file_put_contents("../private/passwd", serialize($contents));
    print ("<h1 align=\"center\">Successfully Modified Password</h1>");
  }
?>
