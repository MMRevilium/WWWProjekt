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
    <div id="Glowna">
      <div id="siteInfo">
      Strona mająca na celu ułatwienie planowania ekwipunku postaci w grze Albion Online oraz umożliwiająca przeglądanie buildów stworzonych przez innych użytkowników
    </div>
    <div>
      <center>Najbardziej polubiane buildy</center>
    <div id="recentBuild">
      <?php
        $sql = "SELECT b.ID, b.Nazwa, b.Opis, b.obrazek, b.AutorID, u.Nick AS AutorNick, b.BronID, b.BronAbility1, b.BronAbility2, b.BronPassive, b.OffHandID, b.HelmID, b.HelmAbility, b.HelmPassive, b.ZbrojaID, b.ZbrojaAbility, b.ZbrojaPassive, b.ButyID, b.ButyAbility, b.ButyPassive, 
       b.PelerynaID, b.JedzenieID, b.PotkiID, b.BagID, 
       i1.Obrazek AS BronObrazek, i2.Obrazek AS OffHandObrazek, i3.Obrazek AS HelmObrazek, i4.Obrazek AS ZbrojaObrazek, i5.Obrazek AS ButyObrazek, i6.Obrazek AS PelerynaObrazek, i7.Obrazek AS JedzenieObrazek, i8.Obrazek AS PotkiObrazek, i9.Obrazek AS BagObrazek 
FROM buildy b 
JOIN uzytkownicy u ON b.AutorID = u.ID 
LEFT JOIN itemy i1 ON b.BronID = i1.ID 
LEFT JOIN itemy i2 ON b.OffHandID = i2.ID 
LEFT JOIN itemy i3 ON b.HelmID = i3.ID 
LEFT JOIN itemy i4 ON b.ZbrojaID = i4.ID 
LEFT JOIN itemy i5 ON b.ButyID = i5.ID 
LEFT JOIN itemy i6 ON b.PelerynaID = i6.ID 
LEFT JOIN itemy i7 ON b.JedzenieID = i7.ID 
LEFT JOIN itemy i8 ON b.PotkiID = i8.ID 
LEFT JOIN itemy i9 ON b.BagID = i9.ID 
WHERE b.ID IN (
    SELECT BuildID
    FROM (
        SELECT BuildID, COUNT(*) AS Likes
        FROM polubienia
        WHERE Dislike = 0
        GROUP BY BuildID
        ORDER BY Likes DESC
    ) AS TopBuilds
) AND b.Schowaj=0;
";
      $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
          echo "<div class='buildCard' style='background-image: url(img/userIMG/".$row[3].")'>";
          echo "<input type='number' name='id' hidden value='".$row[0]."'>";
          echo "<div class='buildInfo'>".
          "<h3>".$row[1]."</h3> u/".$row["AutorNick"]
          ."</div>";
          echo "<div class='buildDisplay'>";
          for ($i=0; $i < 9; $i++) { 
            echo "<div><img src='img/itemy/".$row[24+$i]."'></div>";
          }
          echo "</div>";
          echo "</div>";
        }
        ?>
      </div>
      </div>
    </div>
  </div>
  <?php require("scriplet/footer.php");?>
</body>
<script src="js/main.js"></script>
</html>