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
	<h1> Commerce </h1><?php
			if(isset($_POST["shortlist"]))
		{
			$bid=$_POST["chk"];
			$bname=$_POST["bname"];
			$price=$_POST["price"];
			$store="select * from store where aid='{$_POST['store']}'";
			$resset=$db->query($store);
			if($resset->num_rows>0)
			{
				$rost=$resset->fetch_assoc();
				$name=$rost["storename"];
			$shs="insert into cart (uid,bid,bookname,price,storename) values('{$_SESSION['ID']}','$bid','$bname','$price','$name')";
			if($db->query($shs))
			   {
			header('location:cart.php');	
			}
			else{
				echo "check it!!!!";
			}
			
			}

			
		}
	?>
	<?php
	$sql="select * from book where categories='Commerce'";
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
			 <br>
		  <p><?php echo $ro["bdescription"];?></p>
			 <br>
			 <span><b>Rs:<?php echo $ro["price"];?> /-</b> </span><br>
			 <input type="hidden" name="price" value="<?php echo $ro['price'];?>">
			 <input type="hidden" name="bname" value="<?php echo $ro['bname'];?>">
			 <input type="hidden" name="chk" value="<?php echo $ro['bid'];?>">
			 <input type="hidden" name="store" value="<?php echo $ro['sid'];?>">
			 <span><img height="100" width="80" src="image/<?php echo $ro['image']; ?>"</span><br>
		  <button type="submit" name="shortlist">Shortlist</button>
		  
			 
		 </div>
	 </div>
		</form>
		<?php
		}
		
	}
	?>
</body>
</html>
