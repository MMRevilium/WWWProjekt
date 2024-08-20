<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $id = $_POST['buildID'];

  $sql = "SELECT COUNT(ID) FROM polubienia WHERE BuildID = $id AND Dislike = 0";
  $numLikes = $conn->query($sql)->fetch_row()[0];
  $sql = "SELECT COUNT(ID) FROM polubienia WHERE BuildID = $id AND Dislike = 1";
  $numLikes = $numLikes - ($conn->query($sql)->fetch_row()[0]);

  echo $numLikes;
?>