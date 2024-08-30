<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AlbionBuilder</title>

  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<?php require("scriplet/menu.php");?>
  <div id="main">
   <div id="AdminPanel">
    Lista uzytkoniwkow
    <table>
      <tr><th>ID</th><th>Nick</th><th>Admin</th><th>Zbanowano</th><th>Opcje</th></tr>
    <?php
      $sql = "SELECT * from Uzytkownicy";
      $result = $conn->query($sql);
      while($row = $result->fetch_row()){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>";
        if($row[4]==0) {echo "Nie";} else echo "Tak";
        echo "</td><td>";
        if($row[5]==0) {echo "Nie";} else echo "Tak";
        echo "</td><td><input type='button' class='adminBan' value='Zbanuj' data='$row[0]'><input type='button' class='unbanButton' value='Odbanuj' data='$row[0]'></td></tr>";
      }
    ?>
    </table>
   </div>
  </div>
  <?php require("scriplet/footer.php");?>
</body>
<script src="js/main.js"></script>
</html>