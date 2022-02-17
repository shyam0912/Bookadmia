 <?php
include "database.php";
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<link rel="stylesheet" href="editstyle.css">
<title>edit</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo" height="75px">
	 <ul>
	  	
	  <li><a href="adminhome.php">Home</a></li>
	  
	 </ul>
		
		<div class="formbox">
		
	 <div class="form">
		 
		 		 <?php
		 $id=$_SESSION["I_D"];
		  $sql="select * from store where aid='$id'";
		 $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
			 $ro=$res->fetch_assoc();
			 $sname=$ro["storename"];
			  $user=$ro["username"];
			 $pword=$ro["password"];
			 $pnum=$ro["phone"];
			 $place=$ro["place"];
			 $lmark=$ro["landmark"];
			 $pcode=$ro["pincode"];
			 $address=$ro["address"];
			
		 }
		 ?>
		 <?php
		 
		 if(isset($_POST["submit"]))
		 {
			 $a=$_POST["sname"];
			 $b=$_POST["email"];
			 $c=$_POST["pass"];
			 $d=$_POST["pnum"];
			 $e=$_POST["place"];
			 $f=$_POST["lmark"];
			 $g=$_POST["pcode"];
			 $h=$_POST["adress"];
			 
			 $sql="update store set storename='$a',phone='$d',place='$e',landmark='$f',pincode='$g',address='$h' where aid='{$_SESSION['I_D']}'";
			 if($db->query($sql))
				{
				header('Location:adminhome.php');
				}
			 else
			 {
				 echo "Incorrct";
			 }
		 }
		 
		 ?>
		 
		<form action="" method="post">
		  <input type="text" name="sname" value="<?php echo $sname; ?>" placeholder="Store name" required>
		  <input type="email" name="email" value="<?php echo $user; ?>" placeholder="Email address" required>
		  <input type="text" name="pass" value="<?php echo $pword; ?>" placeholder="Password" required>
		  <input type="text" name="pnum" value="<?php echo $pnum; ?>" placeholder="Phone no" required>
		  <input type="text" name="place" value="<?php echo $place; ?>" placeholder="Place" required>
		  <input type="text" name="lmark" value="<?php echo $lmark; ?>" placeholder="Landmark">
		  <input type="text" name="pcode" value="<?php echo $pcode; ?>" placeholder="Pin code">
		  <textarea rows="4" cols="50" name="adress" value="<?php echo $address; ?>" placeholder="Address" required><?php echo $address; ?></textarea>
			<div class="file">
		  <label for="myfile">Store image:</label>
          <input type="file" id="myfile" name="myfile"><br>
				</div>
          <input name="submit" type="submit">
		 </form>
		</div>
	</div>
			
	</nav>
</body>
</html>
