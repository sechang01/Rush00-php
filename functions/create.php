<?php

function create($login, $passwd, $contents){
  $contents[] = array("login" => $login, "passwd" => hash(whirlpool, $passwd));
  file_put_contents("../data/passwd", serialize($contents));
}
?>
