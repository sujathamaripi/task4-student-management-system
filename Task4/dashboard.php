<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Student Management System</h2>

    <h3>Welcome</h3>

    <p>You have successfully logged in.</p>

    <br>

    <a href="add_student.php">
        <button>Add Student</button>
    </a>

    <br><br>

    <a href="view_students.php">
        <button>View Students</button>
    </a>

    <br><br>

    <a href="logout.php">
        <button>Logout</button>
    </a>

</div>

</body>
</html>