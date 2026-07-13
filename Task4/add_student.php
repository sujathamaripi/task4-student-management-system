<?php
include "config.php";
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_name = $_POST['student_name'];
    $roll_no = $_POST['roll_no'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students(student_name, roll_no, branch, year, email, phone)
            VALUES('$student_name','$roll_no','$branch','$year','$email','$phone')";

    if ($conn->query($sql) == TRUE) {
        echo "<script>alert('Student Added Successfully!');</script>";
    } else {
        echo "<script>alert('Error Adding Student!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Add Student</h2>

<form method="POST">

<input type="text" name="student_name" placeholder="Student Name" required>

<input type="text" name="roll_no" placeholder="Roll Number" required>

<input type="text" name="branch" placeholder="Branch" required>

<input type="number" name="year" placeholder="Year" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<button type="submit">Add Student</button>

</form>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</div>

</body>
</html>