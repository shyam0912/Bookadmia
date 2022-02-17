<?php
include "database.php";
session_start();
if(!$_SESSION['ID'])
{
 header('location:index.php?ACCESS DENIED');	
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<link rel="stylesheet" href="orderstyle.css">
<title>Order</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo">
	 <ul>
	  <li><a href="adminhome.php">home</a></li>
	  <li><a href="stock.php">Stock details</a></li>
	  <li><a href="add.php">Add Book</a></li>
	  
	 </ul>
		</nav>
	
	<table class="table">
		 <tr id="header">
		   <th>Sr no</th>
		   <th>Book name</th>
		   <th>Category</th>
		   <th>Author</th>
		   <th>Price</th>
		   <th>User name</th>
		   <th>status</th>
	     </tr>
		 
		
	 </table>
	
</body>
</html>
