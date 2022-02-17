<?php
include "database.php";
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="homestyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Admin</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo">
	 <ul>
	  	<?php echo "<p style='color:ghostwhite;display:inline-block;position:relative;left:-675px;font-family:sans-serif;'>Hello ".$_SESSION["A"]."</p>";?>
	  <li><a href="stock.php">Stock details</a></li>
	  <li><a href="add.php">Add Book</a></li>
	 
	  
	 </ul>
		
		<div class="dropdown">
	 <button class="dbt">Profile</button>
	   <div class="items">
		<a href="edit.php">Edit</a>
	    <a href="logout.php">Logout</a>
	   </div>
		</div>
			
	</nav>
	

	<div class="box">
		<h2><center>catorgies</center></h2><br><br>
		<button class="tablinks" onclick="openCourse(event, 'a')" id="defaultOpen">Language</button>
        <button class="tablinks" onclick="openCourse(event, 'b')">Commerce</button>
	</div>
 <div class="frame">
	 <div id="a" class="tabcontent"><iframe src="adbook1.php" height="500px"  width="1275px"></iframe></div>
	 <div id="b" class="tabcontent"><iframe src="adbook2.php" height="500px"  width="1275px"></iframe></div>
	</div>
	
</body>
	<script>
	   
		function openCourse(evt, courseNum) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(courseNum).style.display = "block";
  evt.currentTarget.className += " active";
}
	document.getElementById("defaultOpen").click();
		
	
		
	</script>
</html>
