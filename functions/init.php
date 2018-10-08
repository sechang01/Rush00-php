<?php

function inita($login, $passwd){
  $contents = unserialize(file_get_contents("./passwd"));
  $contents[] = array("login" => $login, "passwd" => hash(whirlpool, $passwd));
  file_put_contents("./passwd", serialize($contents));
}
?>
