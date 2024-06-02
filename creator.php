<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BuildCreator</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav>
    <a href="Index.php"><div class="nav-option">Strona Główna</div></a>
    <a href="builds.php"><div class="nav-option">Lista buildów</div></a>
    <a href="creator.php"><div class="nav-option">Stwórz własny build</div></a>
    <a href="login.html"><div class="nav-option">Zaloguj się</div></a>
  </nav>
  <div id="main">
    <form method="GET" action="insertBuild.php">
      <div class="buildBox">
        <?php
          $conn = mysqli_connect('localhost','root','','wwwprojekt');

          for ($i=1; $i < 10; $i++) { 
            $sql = "SELECT * FROM itemy WHERE slot=$i";
            $result = $conn->query($sql);
  
            $rownum = $result->num_rows;
  
            echo "<select size='$rownum'>";
            while($row = $result->fetch_row()){
              echo "<option value='$row[0]' mypng='$row[2]'>$row[1]</option>";
            }
            echo "</select>";
          }
            
          // $sql = "SELECT * FROM itemy WHERE slot=6";
          // $result = $conn->query($sql);

          // $rownum = $result->num_rows;

          // echo "<select size='$rownum'>";
          // while($row = $result->fetch_row()){
          //   echo "<option value='$row[0]' mypng='$row[2]'>$row[1]</option>";
          // }
        ?>
      </div>
    
    </form>
  </div>
  <footer>

  </footer>
</body>
<script src="js/main.js"></script>
</html>