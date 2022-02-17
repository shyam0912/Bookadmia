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
	<link rel="stylesheet" href="style.css">
<title>search</title>
</head>
	
<body>
	
<nav>
		<img src="log.jpeg" alt="logo" height="80px" >
	 <ul>	
	  <li><a href="home.php">home</a></li>
	  
	 </ul>
	</nav>
	<?php
		if(isset($_POST["shortlist"]))
		{
			$bid=$_POST["chk"];
			$bname=$_POST["bname"];
			$price=$_POST["price"];
			$shs="insert into cart (uid,bid,bookname,price) values('{$_SESSION['ID']}','$bid','$bname','$price')";
			if($db->query($shs))
			   {
			header('location:cart.php');	
			}
			else{
				echo "check it!!!!";
			}
			
		}
	?>
<?php
	if(isset($_POST["search"]))
	{
		$sql="select store.storename,book.bname,book.author,book.publisher,book.bid,book.price from store inner join book on  book.sid=store.aid where bname like '%{$_POST['searchbox']}%' ";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			while($ro=$res->fetch_assoc())
			{?>
				<form action="test.php" method="post" target="_parent">

							 <div class="book">
								<div class="content">
		  <h2><input type="hidden" name="bname"><?php echo $ro["bname"];?></h2>
		  <p><?php echo $ro["author"];?></p>
		  <p><?php echo $ro["publisher"];?></p>
		  <p><?php echo $ro["storename"];?></p>
		  <span>Rs:<?php echo $ro["price"];?></span><br>
			  	 <input type="hidden" name="price" value="<?php echo $ro['price'];?>">
			 <input type="hidden" name="bname" value="<?php echo $ro['bname'];?>">
			 <input type="hidden" name="chk" value="<?php echo $ro['bid'];?>">
		  <button type="submit" name="shortlist">Shortlist</button>
		  
			 
		 </div>
	 </div>
	</form>
			<?php
			}
		}
}
	
	?>
</body>
</html>
