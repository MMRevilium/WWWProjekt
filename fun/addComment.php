<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $autor = $_SESSION["id"];
  $id = $_POST['id'];
  $text = $_POST['text'];

  $sql = "INSERT INTO komentarze (ID, Text, AutorID, BuildID) VALUES (NULL, '$text', $autor, $id)"; 
  $conn->query($sql);
  echo "<p>
  u/$_SESSION[login]<br>$text
  </p>"
?>