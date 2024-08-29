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
      echo "<div id='notif' class='nav-option tooltip-container'>";
      $num = mysqli_num_rows($result);
      if($num>0){
        echo "<div class='tooltip-content' id='notif-content'>";
        $sql = "SELECT buildID, tresc, b.Nazwa, p.ID from powiadomienia AS p JOIN buildy AS b WHERE b.ID = buildID AND UserID = $_SESSION[id]";
        $result = $conn->query($sql);
        while($ro = $result->fetch_row()){
          echo "<div class='notif-single'><div class='font150'><a href='./details.php?id=$ro[0]'>Build o nazwie <br> $ro[2] <br> został ukryty <br> z powodu:<div class='notif-tresc'>$ro[1]<br></div></a><input type='button' value='X' data='$ro[3]'></div></div>";
        }
        echo "</div>";
        echo "<div id='num' data='$num'>Sprawdź!</div>";
      } else echo "Brak<br>powiadomień";
      echo "</div>";
    }
    else
    echo "<a href='login.php'><div class='nav-option'>Zaloguj się</div></a>";
    ?>
    
  </nav>