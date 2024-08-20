<?php require("../scriplet/db.php")?>
<?php require("../scriplet/session.php")?>
<?php
  $user = $_SESSION["id"];
  $id = $_POST['buildID'];
  $Status = $_POST['minus'];
  if($Status) {
    $rStatus = 0;
  } else {
    $rStatus = 1;
  }

  $sqlT = "SELECT * FROM polubienia WHERE UserID = '$user' AND BuildID = '$id' AND Dislike = $Status";
  $sqlrT = "SELECT * FROM polubienia WHERE UserID = '$user' AND BuildID = '$id' AND Dislike = $rStatus";
  $sql = "INSERT INTO polubienia (UserID, BuildID, Dislike) VALUES ($user, $id, $Status)";

  if(mysqli_num_rows($conn->query($sqlT))==0) {
    $conn->query($sql);
    if(mysqli_num_rows($conn->query($sqlrT))>0) {
      $sql = "DELETE FROM polubienia WHERE UserID = $user AND BuildID = $id AND Dislike = $rStatus";
      $conn->query($sql);
    }
  }
  //debug
  echo "success";
?>