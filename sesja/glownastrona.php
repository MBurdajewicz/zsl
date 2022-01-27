<?php session_start(); ?>
<html>
  <body>
    <h3>Strona gówna</h3>
    <?php
if(isset($_SESSION['login'])){
  echo "Zalogowano jako: ".$_SESSION['login'];
}
     ?>
     <br>
<a href="./wylogowanie.php">Wyloguj się</a>

<br><br><br><br>
<a href="./data.php">DANE</a>
<br>
<a href="./login.php">Logowanie</a>
<br>

  </body>
</html>