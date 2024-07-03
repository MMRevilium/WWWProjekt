<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $autor = $_SESSION["id"]; 

  $buildID = $_POST['id'];

  $slot1=$_POST["slot1"];
  $slot2=$_POST["slot2"];
  $slot3=$_POST["slot3"];
  $slot4=$_POST["slot4"];
  $slot5=$_POST["slot5"];
  $slot6=$_POST["slot6"];
  $slot7=$_POST["slot7"];
  $slot8=$_POST["slot8"];
  $slot9=$_POST["slot9"];

  $HelmAbility=$_POST["1D"];
  $HelmPassive=$_POST["1P"];
  $BronAbility1=$_POST["3Q"];
  $BronAbility2=$_POST["3W"];
  $BronPassive=$_POST["3P"];
  $ZbrojaAbility=$_POST["6R"];
  $ZbrojaPassive=$_POST["6P"];
  $ButyAbility=$_POST["8F"];
  $ButyPassive=$_POST["8P"];

  $nazwa=$_POST["nazwa"];
  $opis=$_POST["opis"];
  if(isset($_FILES["obrazek"])){
    $obrazek = basename($_FILES["obrazek"]["name"]);
    move_uploaded_file($_FILES["obrazek"]["tmp_name"], "../img/userIMG/$obrazek");
    $sql = "UPDATE `buildy` 
      SET `Nazwa` = '$nazwa', `Opis` = '$opis', `obrazek` = '$obrazek', `AutorID` = $autor, `BronID` = $slot4, 
      `BronAbility1` = $BronAbility1, `BronAbility2` = $BronAbility2, `BronPassive` = $BronPassive, `OffHandID` = $slot6, `HelmID` = $slot2, 
      `HelmAbility` = $HelmAbility, `HelmPassive` = $HelmPassive, `ZbrojaID` = $slot5, `ZbrojaAbility` = $ZbrojaAbility, `ZbrojaPassive` = $ZbrojaPassive, 
      `ButyID` = $slot8, `ButyAbility` = $ButyAbility, `ButyPassive` = $ButyPassive, `PelerynaID` = $slot3, `JedzenieID` = $slot7, `PotkiID` = $slot9, `BagID` = $slot1 
      WHERE `ID` = $buildID;";
  } else {
    $sql = "UPDATE `buildy` 
    SET `Nazwa` = '$nazwa', `Opis` = '$opis', `obrazek` = NULL, `AutorID` = $autor, `BronID` = $slot4, 
        `BronAbility1` = $BronAbility1, `BronAbility2` = $BronAbility2, `BronPassive` = $BronPassive, `OffHandID` = $slot6, `HelmID` = $slot2, 
        `HelmAbility` = $HelmAbility, `HelmPassive` = $HelmPassive, `ZbrojaID` = $slot5, `ZbrojaAbility` = $ZbrojaAbility, `ZbrojaPassive` = $ZbrojaPassive, 
        `ButyID` = $slot8, `ButyAbility` = $ButyAbility, `ButyPassive` = $ButyPassive, `PelerynaID` = $slot3, `JedzenieID` = $slot7, `PotkiID` = $slot9, `BagID` = $slot1 
    WHERE `ID` = $buildID;";
  }
  echo "<br>";
  echo $sql;
  echo "<br>";
  $conn->query($sql);
  $conn->close();
  header("location: ../details.php?id=$buildID");
?>