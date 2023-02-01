<?php
session_start();
//echo " Welcome".$_SESSION['user_name'];
?>




<html>
<head>
	<title>Display</title>
	<style>
		body
		{
			background-color: #5854c7;
		}
		table
		{
			background-color: white;
		}
		.update, .delete
		{
			background-color: green;
			color:white;
			border:0;
			outline: none;
			border-radius: 7px;
			height:24px;
			width: 80px;
			font-weight:bold;
			cursor: pointer;
		}
		.delete
		{
			background-color: red;
			}
	</style>
</head>












<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else
{
	header('location:login.php');
}


$query = "SELECT * FROM form"; 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);



//echo $result[fname];


//echo $total;

if($total != 0)
{
	//echo "Table has records";
	

	?>
	<br>
	<br>
	<br>
	<h2 align="center"><mark>Displaying All Records</mark></h2>
<center><table border="1" cellspacing="6" width="100%">
		<tr>
		<th width="4%">Rollno.</th>
		<th width="4%">Image</th>
		<th width="6%">First Name</th>
		<th width="4%">Last Name</th>
		<th width="5%">Gender</th>
		<th width="20%">Email</th>
		<th width="7%">Phone</th>
		<th width="6%">Caste</th>
		<th width="8%">Language</th>
		<th width="22%">Address</th>
		<th width="14%">Operations</th>
		</tr>
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['Rollno']."</td>

				<td><img src='".$result['std_image']."' height='100px' width='100px'></td>

				<td>".$result['fname']."</td>
				<td>".$result['lname']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phone']."</td>
				<td>".$result['caste']."</td>
				<td>".$result['lang']."</td>
				<td>".$result['address']."</td>

				<td><a href='update_design.php?id=$result[Rollno]'><input type='submit'value='Update' class='update'></a>

				<a href='delete.php?id=$result[Rollno]'><input type='submit'value='Delete' class='delete' onclick = 'return checkdelete()'></a>
				</td>
			</tr>
			";   
			   //&fn=$result[fname] &ln=$result[lname]&gn=$result[gender]&em=$result[email]&ph=$result[phone]&ad=$result[address]

	}
}

else
{
	echo "No records found";

}


?>
</table>
</center>
 <a href="logout.php"><input type="submit" name="" value="LogOut" style="background: purple; color: white;height: 35px; width: 100px; margin-top: 20px; font-size:18px ; border: 0;border-radius:5px; cursor: pointer;">

<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to delete this record ?');
	}

</script>





