<?php
$id = $_POST['id'];
$pwd= $_POST['pwd'];

if($id=="ujjwal" && $pwd=="12345")
{
	header('location:data.php');
}

else
{

echo "Wrong ID and password";
echo "<a href='Log.php'>click here</a>";
 


}
?>