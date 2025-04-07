<?php
include 'db_config.php';

$sql = "SELECT id, name, email, event_name, event_date FROM events";
$result = $conn->query($sql);

echo "<h2>Регистрирани настани</h2>";
echo "<table border='1'><tr><th>ID</th><th>Име</th><th>Email</th><th>Настан</th><th>Датум</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["event_name"]."</td><td>".$row["event_date"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='5'>Нема податоци</td></tr>";
}

echo "</table>";
$conn->close();
?>
