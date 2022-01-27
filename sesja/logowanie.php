<?php
session_start();
if((!empty($_POST['mail']))&&(!empty($_POST['pass']))) {
    $_SESSION["login"] = $_POST["mail"];
    header("location:./glownastrona.php");
}
else{
    $_SESSION["error"]= "Wypełnij wszystkie pola";
    header("location:./login.php");
  }
?>