<?php
  include ("auth.php");
  session_start();
  $_SESSION["logged_on_user"] = "";
  header("Location: http://localhost:8888/");
  exit;
?>
