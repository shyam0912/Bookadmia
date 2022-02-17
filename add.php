<?php
include "database.php";
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="addstyle.css">
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<title>Add Items</title>
</head>

<body>
	<nav>
		<img src="log.jpeg" alt="logo">
	 <ul>
	  <li><a href="adminhome.php">Home</a></li>	
	  <li><a href="stock.php">Stock details</a></li>
	  
	 </ul>
	</nav>
	
	<div class="formbox">
		
		<?php
		if(isset($_POST["submit"]))
		{
			$srno=$_POST["srno"];
			$bname=$_POST["bname"];
			$author=$_POST["author"];
			$publisher=$_POST["publisher"];
			$price=$_POST["price"];
			$categories=$_POST["categories"];
			$language=$_POST["language"];
			$isbn=$_POST["isbn"];
			$brief=$_POST["brief"];
				$file=$_FILES['img'];
	$img_name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	$filerror=$_FILES['img']['error'];
	$filetype=$_FILES['img']['type'];
	
	$file_ext=explode('.',$img_name);
	$fileac=strtolower(end($file_ext));
	$allowed=array('jpg','jpeg', 'png','jfif');
		if(in_array($fileac,$allowed))
		{
			if($filerror==0)
			{
				$new_img_name = uniqid('', true). '.'.$fileac;
				$img_upload_path = 'image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
					
			

				$sql="insert into book(sid,s_no,bname,author,publisher,price,categories,language,isbn,bdescription,image) values('{$_SESSION['I_D']}','$srno','$bname','$author','$publisher','$price','$categories','$language','$isbn','$brief','$new_img_name')";

				if($db->query($sql))
				{
					
					
					
				header('Location:adminhome.php');
				}
				else{
					   echo "<font color='red'>failed</font>";
					}
			}
		}
		}

	?>	
			
		
	 <div class="form">
		<form action="" method="post" enctype="multipart/form-data">
		  <input type="text" name="srno" placeholder="Sr no">
		  <input type="text" name="bname" placeholder="Name of the Book">
		  <input type="text" name="author" placeholder="Author">
		  <input type="text" name="publisher" placeholder="Publisher">
		  <input type="text" name="price" placeholder="Price">
		  <input type="text" name="categories" placeholder="Categories">
		  <input type="text" name="language" placeholder="Writtern in">
		  <input type="text" name="isbn" placeholder="ISBN">
		  <textarea rows="4" cols="50" name="brief" placeholder="Brief Description"></textarea>
			<div class="file">
				<fieldset>
				  <legend for="myfile">Select a Image:</legend>
				  <input type="file" id="myfile" name="img" style="color: white"><br>
				</fieldset>
			</div>
          <input type="submit" name="submit">
		 </form>
		</div>
	</div>
</body>
</html>
