<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

$sql="create database School";

mysqli_query($conn,$sql);

echo "database created";

mysqli_close($conn);


?>