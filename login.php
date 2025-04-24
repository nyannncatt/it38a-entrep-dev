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
    // Sanitize user inputs to avoid SQL Injection
    $userName = $conn->real_escape_string($_POST['UserName']);
    $password = $_POST['Password'];

    // Prepare the SQL query with a prepared statement
    $stmt = $conn->prepare("SELECT * FROM registration WHERE UserName = ?");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();

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

    // Close the prepared statement
    $stmt->close();
}

$conn->close();
?>
