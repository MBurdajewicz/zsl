<?php
if (!empty($_POST)){
    foreach($_POST as $key=> $value) {
        echo "$key: $value<br>";
         if(empty($value)) {
             echo "<script> history.back() </script>>";
             header('localtion:./baza.php?error=Wypełnij wszystko!&addUser=');
             exit();
         }
    }
         require_once "./baza/connect.php";
         $sql="INSERT INTO 'tab'('id' , 'city_id' , 'surname' , 'birthday' , 'create_date') VALUES (NULL, '$_POST[city_id]' ,'$_POST[name]' ,'$_POST[surname]' ,'$_POST[birthday]' , current_timestamp());";
         $connect->query($sql);
    
        echo $connect->affected_rows;
}

?>