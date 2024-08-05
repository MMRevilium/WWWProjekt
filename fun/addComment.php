<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $autor = $_SESSION["id"];
  $id = $_POST['id'];

  //debug
  echo $id."|".$autor;
?>