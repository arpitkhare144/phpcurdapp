<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/adminpanel.css"/>
<style>
    p{
       
  display: block;
  margin-top: 1em;
  margin-bottom: 1em;
  margin-left:400px;
  margin-right: 0;

    }
</style>

</head>

<?php
require('db.php');
session_start();
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
    //echo $username;
	//Checking is user existing in the database or not
        $query = "DELETE FROM `users` WHERE username='$username'";
	
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Deteled Successfully');</script>";
          } else {
            echo  "<script>alert('Error');</script>";
          }
   
    }
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<h3 class="w3-bar-item">Menu</h3>
  <a href="viewusers.php" class="w3-bar-item w3-button">View Users</a>
  <a href="adduser.php" class="w3-bar-item w3-button">Add User</a>
  <a href="deleteuser.php" class="w3-bar-item w3-button">Delete User</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>
<div class="form">
<h1>Delete User</h1>
<form action="" method="post" name="deleteuser">
<input type="text" name="username" placeholder="username" required />

<br>
<input name="submit" type="submit" value="Delete User" />
</form>

</div>
<?php

?>
