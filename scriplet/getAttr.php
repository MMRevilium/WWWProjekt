<?php
  require("db.php");
  $itemID = $_POST["ItemID"];

  $sql = "SELECT umiejetnosci.ID, umiejetnosci.Nazwa, umiejetnosci.Opis, umiejetnosci.Obrazek, itemyumiejetnosci.KeyBind, itemy.Nazwa FROM umiejetnosci 
  JOIN itemyumiejetnosci ON itemyumiejetnosci.UmiejetnosciID = umiejetnosci.ID 
  JOIN itemy ON itemyumiejetnosci.ItemID = itemy.ID
  WHERE itemy.ID = $itemID";

  $result = $conn->query($sql);
  $string = "";
  while ($row=$result->fetch_array()){
    $string=$string . $row[0].",".$row[1].",".$row[3].",".$row[4]."|";
  }
  echo $string;
?>