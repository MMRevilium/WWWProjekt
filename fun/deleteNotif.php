<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $id = $_POST['id'];
    $sql = "DELETE FROM powiadomienia WHERE id = $id";
  $conn->query($sql);
  echo "success";
?>