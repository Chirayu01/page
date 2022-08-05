<?php
//include 'config.php';
$conn=mysqli_connect("localhost", "root", "", "sd") or die("connection failure");
$catch = $_GET['id'];
$sql = "DELETE FROM st WHERE roll='{$catch}'";
mysqli_query($conn, $sql) or die("query failure");
header("Location: index.php?d=Record Deleted Sucessfully");
?>