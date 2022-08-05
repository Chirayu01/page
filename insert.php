<?php 
//include 'config.php';
$conn=mysqli_connect("localhost", "root", "", "sd") or die("connection failure"); 
$r=$_POST['roll'];
$n=$_POST['name'];
$a=$_POST['address'];
$sql= "INSERT INTO st (roll, name, address) values ('{$r}','{$n}', '{$a}')";
mysqli_query($conn, $sql);
//echo $r;
//mysqli_query((mysqli_connect("localhost", "root", "", "sd")), ("INSERT INTO st (roll, name, address) values ('{$r}','{$n}', '{$a}')"));
header("Location: index.php?i=Data Inserted Successfully");
 ?>



