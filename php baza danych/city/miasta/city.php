<html>
<body>
    <h4>Miasta</h4>
<?php
$sql= "SELECT * FROM `cities`";
$connect= new mysqli("localhost", "root" ,"", "3pi2");
$result = $connect->query($sql);
echo "<table>";
while($user = $result-> fetch_assoc()) {

    echo <<< user

    <tr>
    <td>$user[city_id]</td>  
    <td>$user[city]</td> 

    </tr>
user;
    }

echo "</table>";
?>
</body>
<html>