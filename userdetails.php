<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/adminpanel.css"/>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<h3 class="w3-bar-item">Menu</h3>
  <!-- <a href="viewusers.php" class="w3-bar-item w3-button">View Users</a>
  <a href="adduser.php" class="w3-bar-item w3-button">Add User</a>
  <a href="deleteuser.php" class="w3-bar-item w3-button">Delete User</a> -->
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
<?php
require('db.php');
session_start();
$username=$_SESSION['username'];
$query = "SELECT * FROM `users` WHERE username='$username'";
$result = $con->query($query);
while($row = $result->fetch_assoc()) {
?>
  <h1><?php echo $row['username'];?></h1>
  <p class="title"><?php echo $row['email'];?></p>
  <!-- <p>Harvard University</p> -->
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <?php
				}
			?>
  <p><button>Contact</button></p>
</div>

</body>

</html>
