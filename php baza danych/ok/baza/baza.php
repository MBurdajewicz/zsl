<DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/style.css">
<head>
<body>
    <h4>Użytkownicy</h4>
<?php
    $connect= new mysqli("localhost", "root" ,"", "3pi2");
    $sql = "SELECT * FROM `tab`";
    $result =$connect->query($sql);
    
    echo <<< table
    <table>
        <tr>
            <th>Id</th>
            <th>imie</th>
            <th>nazwisko</th>
            <th>data urodzenia</th>
            <th>Miasto</th>
            <th>data utworzenia użytkownika</th>
        <tr>   
table;

    while($user = $result->fetch_assoc()){

    echo <<< user
    <tr>
    <td>$user[id]</td>
    <td>$user[city_id]</td>  
    <td>$user[name]</td> 
    <td>$user[surname]</td> 
    <td>$user[city]</td>
    <td>$user[birthday]</td> 
    <td>$user[create_date]</td> 

    <td><a href="./script/delete_user.php?deleteUser=$user[id]">usuń</a> </td>
    </tr>
user;
    }
    echo "</table>";
    if(isset($_GET['addUser'])){
        echo <<< FORMADDUSER
        <h4> Dodawanie użytkownika </h4>
        <form accion="./baza/add_user.php" method="post">
            <input type="text" name="name" placehoder="Podaj imie"> <br>
            <input type="text" name="surname" placehoder="Podaj imie"> <br>
            <input type="date" name="birthday" placehoder="Podaj imie"> <br>
            <input type="text" name="city_id" placehoder="Podaj imie"> <br>
            <input type="submit" value="Dodaj"> <br>
        </form>
FORMADDUSER;
    }
    else{
        echo '<a href="baza.php?addUser="> Dodaj użytkownika </a>';
    }
    
?>


</body>
</html>