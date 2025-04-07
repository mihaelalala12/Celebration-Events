<?php
$servername = "localhost";
$username = "root"; // Промени ако имаш друга конфигурација
$password = "";
$dbname = "event_planner";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
