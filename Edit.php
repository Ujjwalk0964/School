<?php

$servername="localhost";
$username="root";
$password="";
$database="School";
$conn=mysqli_connect($servername,$username,$password,$database);
?>


<!DOCTYPE html>
<html>
<head>
	<title>User-data</title>
</head>
<body>
	<form action="Edit.php"method="get">
	Id:-<input type="text" name="Id" value="<?php echo $_GET['Id']; ?>">
    Name:-<input type="text" name="Name" value="<?php echo $_GET['Name']; ?>">
    Age:-<input type="text" name="Age" value="<?php echo $_GET['Age']; ?>">
    Contact:-<input type="text" name="Contact" value="<?php echo $_GET['Contact']; ?>">
    Email:-<input type="text" name="Email" value="<?php echo $_GET['Email']; ?>">
    <input type="Submit" name="save">
   
</form>
</body>
</html>
<?php
if(isset($_GET['save']))
{
	$Id=$_GET['Id'];
	$Name=$_GET['Name'];
	$Age=$_GET['Age'];
	$Contact=$_GET['Contact'];
	$Email=$_GET['Email'];

	$sql="UPDATE school SET Name='$Name',Age='$Age',Contact='$Contact',Email='$Email' WHERE Id='$Id' ";
	$data=mysqli_query($conn,$sql);

	if($data){
		echo "data inserted";
	}
	else{
		echo "data is not set";
	}
}
else
{
	echo "<h1>update the data</h1>";
}
?>