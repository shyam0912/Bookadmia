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
<link rel="stylesheet" href="notifystyle.css">
<title>Notification</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo" height="80px" >
	 <ul>	
	  <li><a href="home.php">home</a></li>
	  
	 </ul>
	</nav>
	<div class="container">
	<div class="book">
	  <div class="icon">
		 <img src="books/book.jpg" alt="book" height="100">
	  </div>
		
		 <div class="content">
		  <h2>Book name</h2>
		  <p>About the book</p>
		  <p>details about this book</p>
		  <span>more text about it</span>
		  <button>Check it!</button>
		 </div>
	 </div>
		<div class="book">
	  <div class="icon">
		 <img src="books/book.jpg" alt="book" height="100">
	  </div>
		
		 <div class="content">
		  <h2>Book name</h2>
		  <p>About the book</p>
		  <p>details about this book</p>
		  <span>more text about it</span>
		  <button>Check it!</button>
		 </div>
	 </div>
		<div class="book">
	  <div class="icon">
		 <img src="books/book.jpg" alt="book" height="100">
	  </div>
		
		 <div class="content">
		  <h2>Book name</h2>
		  <p>About the book</p>
		  <p>details about this book</p>
		  <span>more text about it</span>
		  <button>Check it!</button>
		 </div>
	 </div>
	</div>
</body>
</html>
