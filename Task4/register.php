<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "User";

    $sql = "INSERT INTO users(fullname, email, password, role)
            VALUES('$fullname','$email','$password','$role')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Registration Failed!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System - Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Register</h2>

    <form method="POST">

        <input type="text" name="fullname" placeholder="Enter Full Name" required>

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit">Register</button>

    </form>

    <br>

    <a href="index.php">Already have an account? Login</a>

</div>

</body>
</html>