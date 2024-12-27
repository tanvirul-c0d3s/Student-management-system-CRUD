<?php
$id=$_POST['sid'];
$name=$_POST['sname'];
$address=$_POST['saddress'];
$class=$_POST['class'];
$phone=$_POST['sphone'];

include 'connection.php';

$sql = "UPDATE studentinfo SET stu_name='{$name}', stu_address='{$address}', stu_class='{$class}', stu_phone='{$phone}' WHERE stu_id='{$id}';";

$result = mysqli_query($connection, $sql) or die("Query failed");

mysqli_close($connection);

header("Location: http://localhost/crud_fall24/crud_html/index.php");
?>