<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Build Editor</title>

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
            $sql = "SELECT * FROM buildy WHERE ID = $_GET[id]";
            $prev = $conn->query($sql);
            $prev = $prev->fetch_array();
            $slot[1]=$prev["BagID"];
            $slot[2]=$prev["HelmID"];
            $slot[3]=$prev["PelerynaID"];
            $slot[4]=$prev["BronID"];
            $slot[5]=$prev["ZbrojaID"];
            $slot[6]=$prev["OffHandID"];
            $slot[7]=$prev["JedzenieID"];
            $slot[8]=$prev["ButyID"];
            $slot[9]=$prev["PotkiID"];
            $abb[0]=$prev["HelmAbility"];
            $abb[1]=$prev["HelmPassive"];
            $abb[2]=$prev["BronAbility1"];
            $abb[3]=$prev["BronAbility2"];
            $abb[4]=$prev["BronPassive"];
            $abb[5]=$prev["ZbrojaAbility"];
            $abb[6]=$prev["ZbrojaPassive"];
            $abb[7]=$prev["ButyAbility"];
            $abb[8]=$prev["ButyPassive"];
            $nazwa=$prev["Nazwa"];
            $opis=$prev["Opis"];





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
                echo "<option value='$row[0]' mypng='$row[2]' ";
                if($slot[$i]==$row[0]){
                  echo "selected";
                }
                echo ">$row[1]</option>";
              }
              echo "</select>";
            }
          ?>
        </div>
        <div id="BuildAttr">
            <div class="attrbar"><?php echo $abb[0];?></div>
            <div class="attrbar"><?php echo $abb[1];?></div>
            <div class="attrbar"><?php echo $abb[2];?></div>
            <div class="attrbar"><?php echo $abb[3];?></div>
            <div class="attrbar"><?php echo $abb[4];?></div>
            <div class="attrbar"><?php echo $abb[5];?></div>
            <div class="attrbar"><?php echo $abb[6];?></div>
            <div class="attrbar"><?php echo $abb[7];?></div>
            <div class="attrbar"><?php echo $abb[8];?></div>
        </div>
      </div>
      <div id="BuildOptions">
        <div>
            <input type="text" name="nazwa" placeholder="Nazwa" required
            <?php echo "value='$nazwa'"?>
            >
            <textarea name="opis" placeholder="Opis"><?php echo "$opis"?></textarea>
            <label>Wybierz nowe zdjęcie</label>
            <input type="file" name="obrazek">
            <input type="number" name="id" hidden <?php echo "value='$_GET[id]'"?>>
        </div>
        <div>
          <input id='saveNew' type="submit" value="Zapisz jako nowy">
          <input id='updateBuild' type="submit" value="Aktualizuj">
        </div>
      </div>
    </form>
  </div>
  <?php require("scriplet/footer.php");?>
</body>
<script src="js/main.js"></script>
</html>