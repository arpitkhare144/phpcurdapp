<!-- // PHP code to establish connection
// with the localserver -->
<?php

require('db.php');
session_start();

// SQL query to select data from database
$query = "SELECT * FROM `users`";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

?>
<!-- // HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/adminpanel.css"/>
    <title> User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 30px 400px auto;
			font-size: large;
			border: 1px solid black;
            
            width: 70%;
		}

		h1 {
			text-align: center;
            margin-left:400px;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
        
	</style>
</head>

<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<h3 class="w3-bar-item">Menu</h3>
  <a href="viewusers.php" class="w3-bar-item w3-button">View Users</a>
  <a href="adduser.php" class="w3-bar-item w3-button">Add User</a>
  <a href="deleteuser.php" class="w3-bar-item w3-button">Delete User</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>
	<section>
		<h1>User Details</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>username</th>
				<th>email</th>
				<th>password</th>
				<th>trn_date</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['password'];?></td>
				<td><?php echo $rows['trn_date'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
