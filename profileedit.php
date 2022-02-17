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
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="profile.css">
<title>Edit</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo" height="80px" >
	 <ul>	
	  <li><a href="home.php">home</a></li>
	  
	 </ul>
		</nav>
	<div class="formbox">
		
	 <div class="form">
		 <?php
		 $id=$_SESSION["ID"];
		  $sql="select * from user where aid='$id'";
		 $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
			 $ro=$res->fetch_assoc();
			 $fname=$ro["firstname"];
			 $lname=$ro["lastname"];
			 $user=$ro["username"];
			 $pword=$ro["password"];
			 $pnum=$ro["phonenum"];
			 $dob=$ro["dob"];
			 $place=$ro["place"];
			 $lmark=$ro["landmark"];
			 $pcode=$ro["pincode"];
			 $address=$ro["address"];
		 }
		 ?>
		 <?php
		 
		 if(isset($_POST["submit"]))
		 {
			 $a=$_POST["f_name"];
			 $b=$_POST["l_name"];
			 $c=$_POST["e_mail"];
			 $p=$_POST["pword"];
			 $d=$_POST["p_num"];
			 $e=$_POST["dob"];
			 $f=$_POST["place"];
			 $g=$_POST["l_mark"];
			 $h=$_POST["p_code"];
			 $i=$_POST["address"];
			 
			 $sql="update user set firstname='$a',lastname='$b',username='$c',password='$p',phonenum='$d',dob='$e',place='$f',landmark='$g',pincode='$h',address='$i' where aid='{$_SESSION['ID']}'";
			 if($db->query($sql))
				{
				header('Location:home.php');
				}
			 else
			 {
				 echo "Incorrct";
			 }
		 }
		 
		 ?>
		<form action="" method="post">
		  <input type="text" name="f_name" value="<?php echo $fname; ?>" placeholder="First name">
		  <input type="text" name="l_name" value="<?php echo $lname; ?>" placeholder="Last name">
		  <input type="email" name="e_mail" value="<?php echo $user; ?>" placeholder="Email address">
		  <input type="text" name="pword" value="<?php echo $pword; ?>" placeholder="Password">
		  <input type="text" name="p_num" value="<?php echo $pnum; ?>" placeholder="Phone no">
		  <input type="date" name="dob" value="<?php echo $dob; ?>" placeholder="Date of Birth">
		  <input type="text" name="place" value="<?php echo $place; ?>" placeholder="Place">
		  <input type="text" name="l_mark" value="<?php echo $lmark; ?>" placeholder="Landmark">
		  <input type="text" name="p_code" value="<?php echo $pcode; ?>" placeholder="Pin code">
		  <textarea rows="4" cols="50" name="address" value="" placeholder="Address"><?php echo $address; ?></textarea>
          <input name="submit" type="submit">
		 </form>
		</div>
	</div>
</body>
</html>
