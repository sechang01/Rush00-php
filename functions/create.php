<?php

function create($login, $passwd, $contents){
  $contents[] = array("login" => $login, "passwd" => hash(whirlpool, $passwd));
  file_put_contents("./passwd", serialize($contents));
}
?>
