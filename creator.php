<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BuildCreator</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php require("scriplet/menu.php");?>
  <div id="main">
    <form method="POST" action="fun/insertBuild.php" enctype="multipart/form-data">
      <div id="BuildWrapper">
        <div class="buildBox">
          <?php
            require("scriplet/db.php");
            for ($i=1; $i < 10; $i++) { 
              $sql = "SELECT * FROM itemy WHERE slot=$i";
              $result = $conn->query($sql);
    
              $rownum = $result->num_rows;
              $wypisz = "<select required size='$rownum' name='slot$i'";
              if(in_array($i,array(2,4,5,8))){
                $wypisz=$wypisz."class='Ability'>";
              }else {
                $wypisz=$wypisz."";
              }
              echo $wypisz;
              while($row = $result->fetch_row()){
                echo "<option value='$row[0]' mypng='$row[2]'>$row[1]</option>";
              }
              echo "</select>";
            }
          ?>
        </div>
        <div id="BuildAttr">
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
            <div class="attrbar"></div>
        </div>
      </div>
      <div id="BuildOptions">
        <div>
            <input type="text" name="nazwa" placeholder="Nazwa" required>
            <textarea name="opis" placeholder="Opis"></textarea>
            <label>Wybierz zdjęcie</label>
            <input type="file" name="obrazek" required>
        </div>
        <div>
          <input type="button" value="Wyczysc">
          <input type="submit" value="Zapisz">
        </div>
      </div>
    </form>
  </div>
  <?php require("scriplet/footer.php");?>
</body>
<script src="js/main.js"></script>
</html>