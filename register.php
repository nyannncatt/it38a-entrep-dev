<?php
$host = 'localhost';
$db = 'db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent harmful data
    $firstName = $conn->real_escape_string($_POST['FirstName']);
    $middleName = isset($_POST['MiddleName']) ? $conn->real_escape_string($_POST['MiddleName']) : null;
    $lastName = $conn->real_escape_string($_POST['LastName']);
