<?php
function auth($login, $passwd, $contents)
{
  if ($login == NULL || $passwd == NULL)
    return (0);
  foreach ($contents as $row)
  {
      if ($row["login"] == $login)
      {
        if ($row["passwd"] == hash("whirlpool", $passwd))
          return (1);
        else {
          return (2);
        }
      }
  }
  return (0);
}
?>
