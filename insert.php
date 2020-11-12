<?php
$Id=$_POST['Id'];
$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];





$servername="localhost";
$username="root";
$password="";
$database="School";

$conn=mysqli_connect($servername,$username,$password,$database);


$sql="INSERT INTO School(Id,Name,Age,Contact,Email) VALUES ('$Id', '$Name','$Age','$Contact','$Email')";

mysqli_query($conn,$sql);

echo "data is inserted";

mysqli_close($conn);

?>