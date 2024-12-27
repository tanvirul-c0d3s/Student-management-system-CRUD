<?php
$id=$_GET['id'];

include 'connection.php';

$sql = "DELETE FROM studentinfo WHERE stu_id = {$id}";

$result = mysqli_query($connection, $sql) or die("Query failed");

header("Location: http://localhost/crud_fall24/crud_html/index.php");

mysqli_close($connection);
?>