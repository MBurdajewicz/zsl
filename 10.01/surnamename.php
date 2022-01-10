<?php
session_start();
?>
<html>
<body>
    <h4>Imię i nazwisko </h4>
<?php
  echo $_SESSION['name']. " ". $_SESSION['nazwisko']. "<br>";

?>
<a href="strona.php">Strona Główna</a>
</body>
</html>