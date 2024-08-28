<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $user = $_POST["authorID"];
  $id = $_POST['buildID'];
  $text = $_POST['text'];

  $sql = "INSERT INTO powiadomienia (BuildID, Tresc, UserID) VALUES ($id,'$text',$user)";
  $conn->query($sql);
  $sql = "UPDATE buildy SET schowaj=1 WHERE ID=$id";
  $conn->query($sql);
  //debug
  echo "success";
?>