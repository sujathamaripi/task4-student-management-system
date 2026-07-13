<?php
include "config.php";
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_name = $_POST['student_name'];
    $roll_no = $_POST['roll_no'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students SET
            student_name='$student_name',
            roll_no='$roll_no',
            branch='$branch',
            year='$year',
            email='$email',
            phone='$phone'
            WHERE id=$id";

    if ($conn->query($sql) == TRUE) {
        echo "<script>alert('Student Updated Successfully!');
        window.location='view_students.php';</script>";
    } else {
        echo "<script>alert('Update Failed!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Edit Student</h2>

<form method="POST">

<input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" required>

<input type="text" name="roll_no" value="<?php echo $row['roll_no']; ?>" required>

<input type="text" name="branch" value="<?php echo $row['branch']; ?>" required>

<input type="number" name="year" value="<?php echo $row['year']; ?>" required>

<input type="email" name="email" value="<?php echo $row['email']; ?>" required>

<input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>

<button type="submit">Update Student</button>

</form>

<br>

<a href="view_students.php">Back</a>

</div>

</body>
</html>