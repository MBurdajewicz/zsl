<DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/style.css">
<head>
<body>
    <h4>Użytkownicy</h4>
<?php
    $connect= new mysqli("localhost", "root" ,"", "3pi2t");
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
    
    echo <<< table
    <table>
        <tr>
            <th>Id</th>
            <th>imie</th>
            <th>nazwisko</th>
            <th>data urodzenia</th>
            <th>data utworzenia użytkownika</th>
        <tr>
    
table;

    while($user = $result->fetch_assoc()) {

    echo <<< user
    <tr>
    <td>$user[id]</td>  
    <td>$user[name]</td> 
    <td>$user[surname]</td> 
    <td>$user[birthday]</td> 
    <td>$user[create_date]</td> 
    </tr>
user;
    }
    echo "</table>";
?>


</body>
</html>