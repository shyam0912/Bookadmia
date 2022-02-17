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
<link rel="stylesheet" href="cartstyle.css">
<title>cart</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo" height="90px" >
	 <ul>	
	  <li><a href="home.php">Home</a></li>
	  
	 </ul>
		
		<div class="dropdown">
	 <button class="dbt">Profile</button>
	   <div class="items">
		<a href="profileedit.php">Edit</a>
	    <a href="index.php">Logout</a>
	   </div>
		</div>
		</nav>
		<div class="store">
		 <h3><center>Stores</center></h3>
		   <div class="shop">
			   <h4>H&amp;C</h4>
			   <p>Kottayam<br>
	CMS College Road Kottayam<br>
				   686001<br>
Phone:	0481 2304351<br>	handckottayam@gmail.com</p>
			   <div class="popup" onClick="myFunction()"><i>Location</i>
  <span class="popuptext" id="myPopup"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.0155458927497!2d76.51961311487553!3d9.59392789313032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062b0bb1467ac5%3A0xbd31e47b30092b17!2sH%26C%20Stores%2C%20Kottayam!5e0!3m2!1sen!2sin!4v1632717567842!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></span>
</div>
			</div>
			<div class="shop">
			   <h4>DC BOOKS</h4>
			   <p>DC KIZHAKEMURI EDAM,
GOOD SHEPHERD STREET,
KOTTAYAM, KERALA,<br> Pin : 686001<br>
PH: 98461 33336<br>
customercare@dcbooks.com</p>
							   <div class="popup" onClick="myFunc()"><i>Location</i>
  <span class="popuptext" id="myPopup1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.0536097635886!2d76.52921941487548!3d9.590647593132536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062b9e0ce9f549%3A0x4f2233bd18ffbbc8!2sDC%20Books!5e0!3m2!1sen!2sin!4v1633675635808!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></span>
</div>

			</div>
			
		</div>
	 <?php
	if(isset($_POST['remove']))
	{
		$rem="delete from cart where uid='{$_SESSION['ID']}' and cid='{$_POST['bid']}'";
		if($db->query($rem))
		{
			header('location:home.php');
		}
	}
	?>
	
	 <?php
		 
		  $sql="select * from cart where uid='{$_SESSION['ID']}'";
		 $res=$db->query($sql);
		 if($res->num_rows>0)
		 {?>
			
			 	 
	
		<div class="table">
		<table class="cart" >
			<tr id="header">
			
			<th>Book name</th>
				<th>Store name</th>
						<th>Price</th>
			<th>Delete</th>
			</tr>
		<?php
			 while($ro=$res->fetch_assoc())
			 {
		
			?>
	<form action="" method="post">		
	<tr>
			 
			 <td><?php echo $ro["bookname"]; ?></td>
		     <td><?php echo $ro["storename"]; ?></td>
			 <td><?php echo $ro["price"]; ?></td>
		 <td><input type="hidden" name="bid" value="<?php echo $ro['cid']; ?>"><button type="submit" name="remove" >Remove</button></td>
			</tr>
		
	</form>

		<?php
				 }
		 }
	else{
		echo "No entries made!";
	}
	
		 ?>

		</table>
			</div>
	
</body>

	<script>
	function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
		function myFunc() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}
		
	</script>
</html>
