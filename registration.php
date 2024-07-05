<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
  require("scriplet/db.php");
  if (isset($_POST["login"])) {
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    $nick = $_POST["nick"];
    $sql = "INSERT INTO uzytkownicy (login, password, nick) VALUES ('$login', '" . md5($haslo) ."', '$nick')";
    $result = $conn->query($sql);
    if ($result) {
      echo "
      <div class='form'>
      <h3>Zostałeś pomyślnie zarejestrowany.</h3><br/>
      <p class='link'>Kliknij tutaj, aby się <a href='login.php'>zalogować</a></p>
      </div>
      ";
    } 
  else {
    echo "<div class='form'>
    <h3>Nie wypełniłeś wymaganych pól.</h3><br/>
    <p class='link'>Kliknij tutaj, aby ponowić próbę <a
    href='registration.php'>rejestracji</a>.</p>
    </div>";
    }
  }
  else {
?>

<form class="form" action="" method="post">
  <h1 class="login-title">Rejestracja</h1>
  <input type="text" class="login-input" name="login" placeholder="Login" required/>
  <input type="password" class="login-input" name="haslo" placeholder="Hasło" required/>
  <input type="text" class="login-input" name="nick" placeholder="Nazwa użytkownika" required/>
  <input type="submit" name="submit" value="Zarejestruj się" class="login-button">
  <p class="link"><a href="login.php">Zaloguj się</a></p>
</form>
<?php
}
?>
</body>
</html>