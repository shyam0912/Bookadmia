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
<title>Store Register</title>
</head>

<body>
	
		
		<div class="formbox">
		
	 <div class="form">
		 
	
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
			 
			 $sql="insert into store(storename,username,password,phone,place,landmark,pincode,address) 
			 values('$a','$b','$c','$d','$e','$f','$g','$h')";
			 if($db->query($sql))
				{
				header('Location:index.php');
				}
			 else
			 {
				 echo "Incorrct";
			 }
		 }
		 
		 ?>
		 
		<form action="" method="post">
		  <input type="text" name="sname"  placeholder="Store name" required>
		  <input type="email" name="email"  placeholder="Email address" required>
		  <input type="text" name="pass"  placeholder="Password" required>
		  <input type="text" name="pnum"  placeholder="Phone no" required>
		  <input type="text" name="place"  placeholder="Place" required>
		  <input type="text" name="lmark"  placeholder="Landmark">
		  <input type="text" name="pcode"  placeholder="Pin code">
		  <textarea rows="4" cols="50" name="adress"  placeholder="Address" required></textarea>
			
          <input name="submit" type="submit">
		 </form>
		</div>
	</div>
			
	
</body>
</html>
