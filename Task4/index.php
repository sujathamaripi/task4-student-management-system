<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $_SESSION['email'] = $email;

        echo "<script>alert('Login Successful!'); window.location='dashboard.php';</script>";

    } else {

        echo "<script>alert('Invalid Email or Password!');</script>";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Login</h2>

    <form method="POST">

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit">Login</button>

    </form>

    <br>

    <a href="register.php">Create New Account</a>

</div>

</body>
</html>