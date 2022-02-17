<?php
include "database.php";
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<link rel="stylesheet" href="stockstyle.css">
<title>Stock Details</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo">
	 <ul>
	  <li><a href="adminhome.php">Home</a></li>	
	  <li><a href="add.php">Add Book</a></li>
	 </ul>
		
		
			
	</nav>
	
	
	 <table class="table">
		 
		 
		 
		 <tr id="header">
		   <th>No</th>
		   <th>Sr no</th>
		   <th>Book name</th>
		   <th>Category</th>
		   <th>Author</th>
		   <th>Price</th>
	     </tr>
		 <?php
	$sql="select * from book where sid='{$_SESSION['I_D']}'";
	$res=$db->query($sql);
	if($res->num_rows>0)
	{
		while($ro=$res->fetch_assoc())
		{?>
		 <tr>
		   <td><?php echo $ro["bid"];?></td>
		   <td><?php echo $ro["s_no"];?></td>
		   <td><?php echo $ro["bname"];?></td>
		   <td><?php echo $ro["categories"];?></td>
		   <td><?php echo $ro["author"];?></td>
		   <td>Rs <?php echo $ro["price"];?></td>
	     </tr>
		 	<?php
		}
		
	}
	?>
	
	 </table>
	
	
</body>
</html>
