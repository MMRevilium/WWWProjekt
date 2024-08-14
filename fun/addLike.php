<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $user = $_SESSION["id"];
  $id = $_POST['buildID'];

  $sql = "INSERT INTO polubienia (UserID, BuildID) VALUES ($user, $id)"; 
  $conn->query($sql);
  //debug
  echo $sql."||".$user."|".$id;
?>