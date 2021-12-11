<?php
if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    //echo "$key: $value<br>";
    if(empty($value)){
    //echo "<script>history.back()</script>";
    header('location: ./mainbaza.php?error=Wypełnij wszystkie pola!&addUser=');
    exit();
    }
  }
    require_once './bazaconnect.php';
    $sql="INSERT INTO `cwiczenie` (`id`, `name`, `surname`, `date`, `time`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[date]', current_timestamp());";
    $connect->query($sql);
if($connect->affected_rows){
    header('location: ./mainbaza.php?error=dodano uzytkownika');
}else {
    header('location: ./mainbaza.php?error=nie dodano uzytkownika');
}

}


 ?>