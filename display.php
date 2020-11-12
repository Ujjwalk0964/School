<?php
$servername="localhost";
$username="root";
$password="";
$database="School";

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="select * from School";
$data=mysqli_query($conn,$sql);
$row=mysqli_num_rows($data);

if($row !=0)
{
	?>
	<h1>Student Details</h1>
	<table cellspacing="5px" border="5px">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
		<?php
		while ($total=mysqli_fetch_assoc($data)) 
		{
		  echo "<tr>
		           <td>".$total['Id']."</td>
		           <td>".$total['Name']."</td>
		           <td>".$total['Age']."</td>
		           <td>".$total['Contact']."</td>
		           <td>".$total['Email']."</td>
		           <td><a href='Delete.php ?Id=$total[Id]'>Delete</a></td>
		             <td><a href='Edit.php ? Id=$total[Id] & Name=$total[Name] & Age=$total[Age] & Contact=$total[Contact] & Email=$total[Email]'>Edit</a></td>
		             
                     </tr>";
}
}
else
{
	echo "date is not inserted";
}
?>
</table>