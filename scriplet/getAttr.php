<?php
  require("db.php");
  $itemID = $_POST["ItemID"];

  $sql = "SELECT umiejetnosci.ID, umiejetnosci.Obrazek, itemyumiejetnosci.KeyBind, itemy.Obrazek FROM umiejetnosci 
  JOIN itemyumiejetnosci ON itemyumiejetnosci.UmiejetnosciID = umiejetnosci.ID 
  JOIN itemy ON itemyumiejetnosci.ItemID = itemy.ID
  WHERE itemy.ID = $itemID";

  $result = $conn->query($sql);
  $string = "";
  if ($result->num_rows!=0){
    while ($row=$result->fetch_array()){
      $string=$string . $row[0].",".$row[1].",".$row[2].",".$row[3]."|";
    }
    echo $string;
  } else {
    echo "None";
  }
?>