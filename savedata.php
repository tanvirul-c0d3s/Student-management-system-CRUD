<?php
$name=$_POST['sname'];
$address=$_POST['saddress'];
$class=$_POST['class'];
$phone=$_POST['sphone'];

include 'connection.php';  

$sql = "INSERT INTO studentinfo (`stu_name`, `stu_address`, `stu_class`, `stu_phone`) VALUES ('{$name}', '{$address}', '{$class}', '{$phone}');";

$result = mysqli_query($connection, $sql) or die("Query failed");

mysqli_close($connection);

header("Location: http://localhost/crud_fall24/crud_html/index.php");
?>