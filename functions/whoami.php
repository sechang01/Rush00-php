<?php

  session_start();
  if ($_SESSION["logged_on_user"] == NULL || $_SESSION["logged_on_user"] == "")
    print ("ERROR\n");
  else {
    print ($_SESSION["logged_on_user"]);
    print ("\n");
  }
?>
