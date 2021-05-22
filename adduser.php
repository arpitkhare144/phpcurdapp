<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/adminpanel.css"/>
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "
            <div class='w3-sidebar w3-light-grey w3-bar-block' style='width:25%'>
  <h3 class='w3-bar-item'>Menu</h3>
  <a href='viewusers.php' class='w3-bar-item w3-button'>View Users</a>
  <a href='adduser.php' class='w3-bar-item w3-button'>Add User</a>
  <a href='deleteuser.php' class='w3-bar-item w3-button'>Delete User</a>
  <a href='logout.php' class='w3-bar-item w3-button'>Logout</a>
</div>
<div class='form'>
<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='viewusers.php'> See Added User</a></div>";
        }
    }else{
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="viewusers.php" class="w3-bar-item w3-button">View Users</a>
  <a href="adduser.php" class="w3-bar-item w3-button">Add User</a>
  <a href="deleteuser.php" class="w3-bar-item w3-button">Delete User</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>
<div class="form">

<h1>Add User</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Add User" />
</form>
</div>
<?php } ?>
</body>
</html>
