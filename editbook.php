<?php
include "database.php";
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<link rel="stylesheet" href="editbookstyle.css">
<title>Edit</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo">
	 <ul>
	  <li><a href="adminhome.php">home</a></li>	
	  <li><a href="stock.php">Stock details</a></li>
		 <li><a href="add.php">Add item</a></li>
	 </ul>
		</nav>
	
	
	
	<div class="formbox">
		
	 <div class="form">
		 
		 <?php
		 $id=$_SESSION['bid'];
		  $sql="select * from book where bid='$id'";
		 $res=$db->query($sql);
		 if($res->num_rows>0)
		 {
			 $ro=$res->fetch_assoc();
			$srno=$ro["s_no"];
			$bname=$ro["bname"];
			$author=$ro["author"];
			$publisher=$ro["publisher"];
			$price=$ro["price"];
			$categories=$ro["categories"];
			$language=$ro["language"];
			$isbn=$ro["isbn"];
			$brief=$ro["bdescription"];
		 }
		 ?>
		  <?php
		 
		 if(isset($_POST["submit"]))
		 {
			 $a=$_POST["srno"];
			 $b=$_POST["bname"];
			 $c=$_POST["author"];
			 $p=$_POST["publisher"];
			 $d=$_POST["price"];
			 $e=$_POST["categories"];
			 $f=$_POST["language"];
			 $g=$_POST["isbn"];
			 $h=$_POST["brief"];
			 
			 
			 $sql="update book set s_no='$a',bname='$b',author='$c',publisher='$p',price='$d',categories='$e',language='$f',isbn='$g',bdescription='$h' where bid='{$_SESSION['bid']}'";
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
		 <?php
		 if(isset($_POST["delete"]))
		 {
		 
		 $del="delete from book where sid='{$_SESSION['I_D']}' and bid='{$_SESSION['bid']}'";
		 if($db->query($del))
		 {
			header('location:adminhome.php');
			}
		 }
		 
		 ?>
		<form action="" method="post">
			
		  <input type="text" name="srno" value="<?php echo $srno; ?>" placeholder="Sr no">
		  <input type="text" name="bname" value="<?php echo $bname; ?>"   placeholder="Name of the Book">
		  <input type="text" name="author" value="<?php echo $author; ?>"   placeholder="Author">
		  <input type="text" name="publisher" value="<?php echo $publisher; ?>"  placeholder="Publisher">
		  <input type="text" name="price" value="<?php echo $price; ?>"   placeholder="Price">
		  <input type="text" name="categories" value="<?php echo $categories; ?>"   placeholder="Categories">
		  <input type="text" name="language" value="<?php echo $language; ?>"  placeholder="Language">
		  <input type="text" name="isbn" value="<?php echo $isbn; ?>"  placeholder="ISBN">
		  <textarea rows="4" cols="50" name="brief"  placeholder="Brief Description"><?php echo $brief; ?></textarea>
			<div class="file">
		  <label for="myfile">Select a file:</label>
          <input type="file" id="myfile" name="myfile"><br>
				</div>
          <input type="submit" name="submit"><input type="submit" name="delete" value="Delete">
		 </form>
		</div>
	</div>
</body>
</html>
