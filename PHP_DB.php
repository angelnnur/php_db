<?php
// Соединения с базой данных
$servername = "localhost";
$username = "angeln_nur";
$password = "qwerty";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Запрос к базе данных
$sql = "SELECT id_fruit, name_fruit FROM fruits 
WHERE color = 'red'";
$result = $conn->query($sql);

// Обработка 
if ($result->num_rows > 0) 
{
  // вывод данных каждой строки
  while($row = $result->fetch_assoc()) {
    echo "Id fruit: " . $row["id_fruit"]. " - Name fruit: " . $row["name_fruit"]. "<br>";
  }
} else {
  echo "No results";
}

$conn->close();
?>