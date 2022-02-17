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
<link rel="stylesheet" href="homestyle.css">
<title>Home</title>
</head>
<body>
	
	<nav>
		<img src="log.jpeg" alt="logo" height="80px" >
	 <ul>	
	  <li><a href="cart.php">ShortList</a></li>
	  
	 </ul>
		<?php echo "<p style='color:ghostwhite;display:inline-block;position:relative;left:220px;font-family:sans-serif;'>Hello ".$_SESSION["A"]."</p>";?>
		<div class="quotes"><center>The best of both worlds. Store and web.</center></div>
		<div class="dropdown">
	 <button class="dbt_">Profile</button>
	   <div class="items">
		<a href="profileedit.php">Edit</a>
	    <a href="logout.php">Logout</a>
	   </div>
		</div>
		
		<form class="search" action="search.php" method="post">
           <input type="text" name="searchbox" placeholder="  Search..">
<input type="submit" name="search" style="margin-left:1400px;position: relative;bottom:63px;background: #1abc9c;border-radius: 7px;padding: 3px 6px;color: #fff;float: inherit;cursor: pointer;width: 75px;">
       </form>
	</nav>
	<div class="upcoming">
		<marquee><div class="txt">UPCOMING BOOKS</div><img src="upcoming books/book1.jpg" alt="book" height="100px"><img src="upcoming books/book2.jpg" alt="book" height="100px"><img src="upcoming books/book3.jpg" alt="book" height="100px"> </marquee>
	</div>
	<div class="box">
		<h2><center>catorgies</center></h2><br><br>
		<button class="tablinks" onclick="openCourse(event, 'a')" id="defaultOpen">Language</button>
        <button class="tablinks" onclick="openCourse(event, 'b')">Commerce</button>
	</div>
 <div class="frame">
	 <div id="a" class="tabcontent"><iframe src="test.php" height="500px"  width="1275px"></iframe></div>
	 <div id="b" class="tabcontent"><iframe src="type2.php" height="500px"  width="1275px"></iframe></div>
	</div>
	
	<script>
	function openCourse(evt, courseNum){
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
		
</body>
	
	
</html>
