<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1.css">
    <title>Users</title>
</head>
<body>
    <h3>Users</h3>
    <?php
    $connect = new mysqli("localhost","root","","users");
    $sql = "SELECT * FROM `users`;";
    $result = $connect->query($sql);
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }

    echo <<< TABLE
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
        </tr>
    TABLE;

    while ($user = $result->fetch_assoc()) {
        echo <<< USERS
        <tr>
        <td>$user[ID]</td>
        <td>$user[Name]</td>
        <td>$user[Surname]</td>
        <td>$user[Age]</td>
        <td><a href=./plik5skrypt.php?deleteUser=$user[ID]>Usuń</a></td>
        </tr>
        USERS;
    }



    ?>
    
    </table>
</body>
</html>