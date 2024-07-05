<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $autor = $_SESSION["id"]; 

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
  $obrazek = str_replace(" ","",$obrazek);
  move_uploaded_file($_FILES["obrazek"]["tmp_name"], "../img/userIMG/$obrazek");


  $sql = "INSERT INTO `buildy` 
  (`ID`, `Nazwa`, `Opis`, `obrazek`, `AutorID`, `BronID`, `BronAbility1`, `BronAbility2`, `BronPassive`, `OffHandID`, `HelmID`, `HelmAbility`, `HelmPassive`, `ZbrojaID`, `ZbrojaAbility`, `ZbrojaPassive`, `ButyID`, `ButyAbility`, `ButyPassive`, `PelerynaID`, `JedzenieID`, `PotkiID`, `BagID`) VALUES 
  (NULL, '$nazwa', '$opis', '$obrazek', $autor, $slot4, $BronAbility1, $BronAbility2, $BronPassive, $slot6, $slot2, $HelmAbility, $HelmPassive, $slot5, $ZbrojaAbility, $ZbrojaPassive, $slot8, $ButyAbility, $ButyPassive, $slot3, $slot7, $slot9, $slot1)";
  } else {
    $sql = "INSERT INTO `buildy` 
  (`ID`, `Nazwa`, `Opis`, `obrazek`, `AutorID`, `BronID`, `BronAbility1`, `BronAbility2`, `BronPassive`, `OffHandID`, `HelmID`, `HelmAbility`, `HelmPassive`, `ZbrojaID`, `ZbrojaAbility`, `ZbrojaPassive`, `ButyID`, `ButyAbility`, `ButyPassive`, `PelerynaID`, `JedzenieID`, `PotkiID`, `BagID`) VALUES 
  (NULL, '$nazwa', '$opis', NULL, $autor, $slot4, $BronAbility1, $BronAbility2, $BronPassive, $slot6, $slot2, $HelmAbility, $HelmPassive, $slot5, $ZbrojaAbility, $ZbrojaPassive, $slot8, $ButyAbility, $ButyPassive, $slot3, $slot7, $slot9, $slot1)";
  }
  echo "<br>";
  echo $sql;
  echo "<br>";
  $conn->query($sql);
  $conn->close();
  header("location: ../builds.php");

?>