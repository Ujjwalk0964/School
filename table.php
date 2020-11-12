<?php

$servername="localhost";
$username="root";
$password="";
$database="School";

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="create table School(Id int(20), Name varchar(20),Age int(2),Contact int(10),Email varchar(30))";

mysqli_query($conn,$sql);

echo "table created";

mysqli_close($conn);

?>