<html>
  <head>
    <link rel="stylesheet" href=./css/style.css> <!--css musi być w innym folderze bo nie zadziała-->   
</head>
<body>
  <!--
    Lista działających części 
    wypisywanie ✓
    css ✓
    usuwanie ✓
    dodawanie ✓
    edytowanie
    czytelność kodu ✓
   -->
  <h3>zadanie</h3>
<?php
$sql = "SELECT * FROM `cwiczenie`";
$connect = new mysqli("localhost", "root", "", "cwiczenia");
$result = $connect->query($sql);
if (isset($_GET['error'])) {
  echo $_GET['error'].'<br><br>';
}
//początek tabeli
  echo <<<TABLE
  <table>
    <tr>
      <th>Id</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
      <th>Godzina</th>
      <th>Usuń Użytkownika</th>  
    </tr>
TABLE;

while ($user = $result->fetch_assoc()) {
  echo <<< USER
    <tr>
      <td>$user[id]</td>
      <td>$user[name]</td>
      <td>$user[surname]</td>
      <td>$user[date]</td>
      <td>$user[time]</td> 
      <td><a href="./baza_deleteuser.php?deleteUser=$user[id]">usuń</td>
    </tr>
USER;
}
echo "</table>";
//koniec tabeli

if (isset($_GET['addUser'])) {
  echo <<< FORMADDUSER
    <h4>Doawanie użytkownika</h4>
    <form action="./baza_adduser.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="date" name="date"><br>
      <input type="submit" value="Dodaj użytkownika">
    </form>
FORMADDUSER;
}
else{
  echo '<br><a href="mainbaza.php?addUser=">Dodaj użytkownika</a>';
}
?>
</body>
</html>

