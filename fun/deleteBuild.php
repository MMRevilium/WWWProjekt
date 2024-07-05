<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $buildID = $_GET['id'];
    $sql = "DELETE FROM `buildy` WHERE id = $buildID";
  echo "<br>";
  echo $sql;
  echo "<br>";
  $conn->query($sql);
  unlink("../img/userIMG/$_GET[obrazek]");
  $conn->close();
  header("location: ../builds.php");
?>