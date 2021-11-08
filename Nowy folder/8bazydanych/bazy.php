<DOCTYPE html>
<head>

<head>
<body>
    <h4>Użytkownicy</h4>
<?php
    $connect= new mysqli("localhost", "root" ,"", "3pi2t");
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
    
    
    while($user = $result->fetch_assoc()) {

    echo <<< user
    Id: $user[id]<br>
    imie nazwisko $user[name] $user[surname]<br>
    data urodzenia $user[birthday] <br>
    data stworzenia konta $user[create_date] <br>
    <hr>
user;
    }
?>
</body>
</html>