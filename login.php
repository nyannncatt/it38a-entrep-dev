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
    $userName = $_POST['UserName'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM registration WHERE UserName = '$userName'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['Password'])) {
            echo "Login successful!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Username not found.";
    }
}

$conn->close();
?>