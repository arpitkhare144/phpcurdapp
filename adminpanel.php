<!DOCTYPE html>
<html>
<title>ADMIN PANEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/adminpanel.css"/>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<h3 class="w3-bar-item">Menu</h3>
  <a href="viewusers.php" class="w3-bar-item w3-button">View Users</a>
  <a href="adduser.php" class="w3-bar-item w3-button">Add User</a>
  <a href="deleteuser.php" class="w3-bar-item w3-button">Delete User</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Welcome<?php require('db.php');
session_start();
echo "\n";
echo $_SESSION['username']; echo"!"; ?></h1>
</div>

<img src="https://www.lifewire.com/thmb/j7yxms5zS6pnRfNV8hcTLeEwnPE=/3000x2000/filters:fill(auto,1)/create-new-admin-account-for-login-issues-2259976-06bf383f07af4fd8a7715a7b0930f7aa.png" alt="Car" style="width:100%">

<!-- <div class="w3-container">
<h2>Sidebar Navigation Example</h2>
<p>The sidebar with is set with "style="width:25%".</p>
<p>The left margin of the page content is set to the same value.</p>
</div> -->

</div>
      
</body>
</html>
