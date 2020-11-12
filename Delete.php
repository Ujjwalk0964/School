<?php
$servername="localhost";
$username="root";
$password="";
$database="School";
$Id=$_GET['Id'];

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="DELETE FROM School WHERE Id=$Id";

$data=mysqli_query($conn,$sql);
if($data)
{
	echo "deleted";
}
else
{
	echo "failed";
}