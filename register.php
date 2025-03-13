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
    $firstName = $_POST['FirstName'];
    $middleName = isset($_POST['MiddleName']) ? $_POST['MiddleName'] : null;
    $lastName = $_POST['LastName'];
    $userName = $_POST['UserName'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
    $birthdate = $_POST['Birthdate'];
    $address = $_POST['Address'];
    $contactNumber = $_POST['ContactNumber'];

    $sql = "INSERT INTO registration (FirstName, MiddleName, LastName, UserName, Email, Password, Birthdate, Address, ContactNumber)
            VALUES ('$firstName', '$middleName', '$lastName', '$userName', '$email', '$password', '$birthdate', '$address', '$contactNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>