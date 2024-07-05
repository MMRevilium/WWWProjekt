<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Build</title>

  
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
  <?php require("scriplet/menu.php"); ?>
  <div id="main">
    <?php
              $id = $_GET["id"];
              $sql = "SELECT b.ID, b.Nazwa, b.Opis, b.obrazek, b.AutorID, u.Nick AS AutorNick, b.BronID, b.BronAbility1, b.BronAbility2, b.BronPassive, b.OffHandID, b.HelmID, b.HelmAbility, b.HelmPassive, b.ZbrojaID, b.ZbrojaAbility, b.ZbrojaPassive, b.ButyID, b.ButyAbility, b.ButyPassive, 
        b.PelerynaID, b.JedzenieID, b.PotkiID, b.BagID, 
        i1.Obrazek AS BronObrazek, i2.Obrazek AS OffHandObrazek, i3.Obrazek AS HelmObrazek, i4.Obrazek AS ZbrojaObrazek, i5.Obrazek AS ButyObrazek, i6.Obrazek AS PelerynaObrazek, i7.Obrazek AS JedzenieObrazek, i8.Obrazek AS PotkiObrazek, i9.Obrazek AS BagObrazek FROM buildy b 
        JOIN uzytkownicy u ON b.AutorID = u.ID LEFT JOIN itemy i1 ON b.BagID = i1.ID LEFT JOIN itemy i2 ON b.HelmID = i2.ID LEFT JOIN itemy i3 ON b.PelerynaID = i3.ID LEFT JOIN itemy i4 ON b.BronID = i4.ID LEFT JOIN itemy i5 ON b.ZbrojaID = i5.ID 
        LEFT JOIN itemy i6 ON b.OffHandID = i6.ID LEFT JOIN itemy i7 ON b.JedzenieID = i7.ID LEFT JOIN itemy i8 ON b.ButyID = i8.ID LEFT JOIN itemy i9 ON b.PotkiID = i9.ID WHERE b.ID = $id;";
              $result = $conn->query($sql);
    ?>

      <div id="BuildWrapper">
        <div class="buildDisplay">
          <?php
          $row = $result->fetch_array();
            for ($i=1; $i < 10; $i++) { 
                $j = 23+$i;
                echo "<img src='img/itemy/$row[$j]'>";
            }
          ?>
        </div>
        <div id="BuildAttr">
            <?php
            //helm
                          $abbind=0;
                          $umint=0;
              $sql = "SELECT umiejetnosci.ID, umiejetnosci.Obrazek, itemyumiejetnosci.KeyBind, itemy.Obrazek FROM umiejetnosci 
                JOIN itemyumiejetnosci ON itemyumiejetnosci.UmiejetnosciID = umiejetnosci.ID 
                JOIN itemy ON itemyumiejetnosci.ItemID = itemy.ID
                WHERE itemy.ID = $row[11]";
              $result = $conn->query($sql);
              $prevkeybind='';
              while($um = $result->fetch_array()){
                $keybind = $um[2];
                if($prevkeybind==''){
                  echo "<div class='attrbar'><img src='img/itemy/$um[3]'>";
                } else
                if ($keybind!=$prevkeybind){
                  $abbind=0;
                  $umint++;
                  echo "</div><div class='attrbar'><img src='img/itemy/$um[3]'>";
                }
                

                echo "<img src='img/umiejetnosci/$um[1]' class='";
                if ($abbind==$row[12+$umint]){
                  echo 'whiteshadow';
                } else {
                  echo "grayscale";
                }
                echo "'>";


                $abbind++;
                $prevkeybind=$keybind;
              }
              echo "</div>";
              $abbind=0;
              $umint=0;
              //bron

              $sql = "SELECT umiejetnosci.ID, umiejetnosci.Obrazek, itemyumiejetnosci.KeyBind, itemy.Obrazek FROM umiejetnosci 
                JOIN itemyumiejetnosci ON itemyumiejetnosci.UmiejetnosciID = umiejetnosci.ID 
                JOIN itemy ON itemyumiejetnosci.ItemID = itemy.ID
                WHERE itemy.ID = $row[6]";
              $result = $conn->query($sql);
              $prevkeybind='';
              while($um = $result->fetch_array()){
                $keybind = $um[2];
                if($prevkeybind==''){
                  echo "<div class='attrbar'><img src='img/itemy/$um[3]'>";
                } else
                if ($keybind!=$prevkeybind){
                  $abbind=0;
                  $umint++;
                  echo "</div><div class='attrbar'><img src='img/itemy/$um[3]'>";
                }
                

                echo "<img src='img/umiejetnosci/$um[1]' class='";
                if ($abbind==$row[7+$umint]){
                  echo 'whiteshadow';
                } else {
                  echo "grayscale";
                }
                echo "'>";


                $abbind++;
                $prevkeybind=$keybind;
              }
              echo "</div>";
              $abbind=0;
              $umint=0;
              //armor

              $sql = "SELECT umiejetnosci.ID, umiejetnosci.Obrazek, itemyumiejetnosci.KeyBind, itemy.Obrazek FROM umiejetnosci 
                JOIN itemyumiejetnosci ON itemyumiejetnosci.UmiejetnosciID = umiejetnosci.ID 
                JOIN itemy ON itemyumiejetnosci.ItemID = itemy.ID
                WHERE itemy.ID = $row[14]";
              $result = $conn->query($sql);
              $prevkeybind='';
              while($um = $result->fetch_array()){
                $keybind = $um[2];
                if($prevkeybind==''){
                  echo "<div class='attrbar'><img src='img/itemy/$um[3]'>";
                } else
                if ($keybind!=$prevkeybind){
                  $abbind=0;
                  $umint++;
                  echo "</div><div class='attrbar'><img src='img/itemy/$um[3]'>";
                }
                

                echo "<img src='img/umiejetnosci/$um[1]' class='";
                if ($abbind==$row[15+$umint]){
                  echo 'whiteshadow';
                } else {
                  echo "grayscale";
                }
                echo "'>";


                $abbind++;
                $prevkeybind=$keybind;
              }
              echo "</div>";
              $abbind=0;
              $umint=0;
              //boots

              $sql = "SELECT umiejetnosci.ID, umiejetnosci.Obrazek, itemyumiejetnosci.KeyBind, itemy.Obrazek FROM umiejetnosci 
                JOIN itemyumiejetnosci ON itemyumiejetnosci.UmiejetnosciID = umiejetnosci.ID 
                JOIN itemy ON itemyumiejetnosci.ItemID = itemy.ID
                WHERE itemy.ID = $row[17]";
              $result = $conn->query($sql);
              $prevkeybind='';
              $abbind=0;
              $umint=0;
              while($um = $result->fetch_array()){
                $keybind = $um[2];

                if($prevkeybind==''){
                  echo "<div class='attrbar'><img src='img/itemy/$um[3]'>";
                } else
                if ($keybind!=$prevkeybind){
                  $abbind=0;
                  $umint++;
                  echo "</div><div class='attrbar'><img src='img/itemy/$um[3]'>";
                }


                echo "<img src='img/umiejetnosci/$um[1]' class='";
                if ($abbind==$row[18+$umint]){
                  echo 'whiteshadow';
                } else {
                  echo "grayscale";
                }
                echo "'>";


                $abbind++;
                $prevkeybind=$keybind;
              }
              echo "</div>";
            ?>
        </div>
      </div>
      <div id="BuildOptions">
        <div>
          <?php
          echo "<div class='center font200'>$row[1]</div> <sub class='center'><a href='builds.php?fraza=u/$row[5]'>by $row[5]</a></sub> <div>Opis: $row[2]</div>";
          ?>
        </div>
        <div>
          <?php
            if($_SESSION['id']==$row[4] || $_SESSION['AdminStatus']==1){
              echo "<input type='button' value='Edytuj' id='editButton' data='$row[0]'>";
              echo "<input type='button' value='Usun' id='deleteButton' data='$row[0]' data-img='$row[3]'>";
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