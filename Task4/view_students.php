<?php
include "config.php";
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Student Records</h2>

<table border="1" width="100%" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Roll No</th>
<th>Branch</th>
<th>Year</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php
while($row = $result->fetch_assoc())
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['roll_no']; ?></td>

<td><?php echo $row['branch']; ?></td>

<td><?php echo $row['year']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td>
<a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php
}
?>

</table>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</div>

</body>
</html>