<?php require("scriplet/db.php")?>
<?php require("scriplet/session.php")?>
<nav>
    <a href="Index.php"><div class="nav-option">Strona Główna</div></a>
    <a href="builds.php"><div class="nav-option">Lista buildów</div></a>
    <a href="creator.php"><div class="nav-option">Stwórz własny build</div></a>
    <?php
    if(isset($_SESSION["login"])){
      echo "<a href='scriplet/logout.php'><div class='nav-option'>$_SESSION[login] | Wyloguj sie</div></a>";
    }
    else
    echo "<a href='login.php'><div class='nav-option'>Zaloguj się</div></a>";
    ?>
    
  </nav>