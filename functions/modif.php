<?php

if ($_POST["submit"] != "OK" || $_POST["login"] == NULL || $_POST["oldpw"] == NULL || $_POST["newpw"] == NULL)
  print ("ERROR\n");
else {
  //if folder doesn't exist mkdir
  if (!file_exists("../private"))
    mkdir("../private");

  //if file doesnt exist create file
  if (!file_exists("../private/passwd"))
    file_put_contents("../private/passwd");

  //read file
  $files = file_get_contents("../private/passwd");
  $contents = unserialize($files);

  $flag = 1;
  //if user exists in file print error
  foreach ($contents as &$row)
  {
      if ($row["login"] == $_POST["login"]){
        if ($row["passwd"] == hash(whirlpool, $_POST["oldpw"])){
          $row["passwd"] = hash(whirlpool, $_POST["newpw"]);
          $flag = 0;
        }
      }
  }
  if ($flag == 1){
    print("ERROR\n");
    return;
  }
  file_put_contents("../private/passwd", serialize($contents));
  print ("OK\n");
}
?>
