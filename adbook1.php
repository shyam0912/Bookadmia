<?php
include "database.php";
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Untitled Document</title>
</head>

<body>
		<h1>Language</h1>
	<?php
		if(isset($_POST["edit"]))
		{
			$_SESSION["bid"]=$_POST["chk"];
			header('location:editbook.php');
		}
	?>
	<?php
	$sql="select * from book where categories='Language' and sid='{$_SESSION['I_D']}'";
	$res=$db->query($sql);
	if($res->num_rows>0)
	{
		while($ro=$res->fetch_assoc())
		{?>
	<form action="" method="post" target="_parent">
			 <div class="book">
	  
		 <div class="content">
		  <h2><?php echo $ro["bname"];?></h2>
			 <p><b><?php echo $ro["author"];?></b></p>
		  <p><i><?php echo $ro["publisher"];?></i></p>
		  <p><?php echo $ro["bdescription"];?></p>
		  <p>Rs: <?php echo $ro["price"];?>/-</p>
		<span><img height="100" width="80" src="image/<?php echo $ro['image']; ?>"</span><br>
		  <button type="submit" name="edit">Edit</button>
		  <input type="hidden" name="chk" value="<?php echo $ro['bid'];?>">
			 
			 
		 </div>
	 </div>
		</form>
		<?php
		}
		
	}
	?>
	
</body>
</html>
