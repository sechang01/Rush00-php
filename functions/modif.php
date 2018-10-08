<?php

if ($_POST["submit"] != "OK" || $_POST["login"] == NULL || $_POST["oldpw"] == NULL || $_POST["newpw"] == NULL)
  print ("ERROR\n");
else {
  //if file doesnt exist create file
  if (!file_exists("./passwd"))
    file_put_contents("./passwd");

  //read file
  $files = file_get_contents("./passwd");
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
  file_put_contents("./passwd", serialize($contents));
  print ("OK\n");
}
?>
