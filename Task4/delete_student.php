<?php
include "config.php";
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) == TRUE) {
    echo "<script>
    alert('Student Deleted Successfully!');
    window.location='view_students.php';
    </script>";
} else {
    echo "<script>
    alert('Delete Failed!');
    window.location='view_students.php';
    </script>";
}
?>