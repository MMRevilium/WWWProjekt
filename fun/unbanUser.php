<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $id = $_POST['id'];
  $sql = "UPDATE uzytkownicy SET BanStatus = 0 WHERE ID = $id";
  $conn->query($sql);
  echo "success";
?>