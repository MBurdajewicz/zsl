<?php
 if(!empty($_GET['deleteUser']) {
     require_once './connect.php' ;
     $sql="DELETE FROM 'tab' where 'users' . 'id' = $_GET[deleteUser]";
     $connect->query($sql);
     if($connect->affect_rows) {
        header('location: ../baza.php?error=Usunięto rekord');
     }
     else{
        header('location: ../baza.php?error= Nie usunięto rekordu');
     }
     else {
         header('location: ../baza.php');
     }
 })
?>