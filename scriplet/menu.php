<?php require("scriplet/db.php")?>
<?php require("scriplet/session.php")?>
<nav>
    <a href="Index.php"><div class="nav-option">Strona Główna</div></a>
    <a href="builds.php"><div class="nav-option">Lista buildów</div></a>
    <a href="creator.php"><div class="nav-option">Stwórz własny build</div></a>
    <?php
    if(isset($_SESSION["login"])){
      echo "<a href='scriplet/logout.php'><div class='nav-option'>$_SESSION[login] | Wyloguj sie</div></a>";
      $id = $_SESSION['id'];
      $sql = "SELECT BuildID, tresc FROM powiadomienia WHERE UserID = $id";
      $result = $conn->query($sql);
      echo "<div id='notif' class='nav-option'>";
      if(mysqli_num_rows($result)>0){
        echo mysqli_num_rows($result);
      } else echo "Brak<br>powiadomień";
      echo "</div>";
    }
    else
    echo "<a href='login.php'><div class='nav-option'>Zaloguj się</div></a>";
    ?>
    
  </nav>