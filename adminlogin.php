 <?php
include "database.php";
session_start();
?>

<!DOCTYPE html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scope=1.0">
<link rel="stylesheet" href="adstyle.css">
<title>Store Login</title>
</head>

<body>
	<?php
		if(isset($_POST["login"]))
		{
			$user=$_POST["user"];
			$pass=$_POST["pass"];

$sql="select * from admin where username='$user' and password='$pass'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	$ro=$res->fetch_assoc();
	$_SESSION["I_D"]=$ro["aid"];
	$_SESSION["A"]=$ro["storename"];
	
header('Location:store.php');
}
			else{
				echo "invalid username or password";
			}
		

		}

	?>
	<div class="log">
       <img src="log.jpeg" alt="log" width="400px" height="200px">
      </div>
	 <div id="login-form" class="login-page">
          <div class="form-box">
            <div class="button-box">
                    <div id="btn"></div>
                    <button type="button"  class="toggle-btn">Log In</button>
                    
            </div>
                <form id="login" action="" method="post" class="input-group-login">
                    <input type="text" class="input-field" name="user" placeholder="Admin Id" required >
		            <input type="password" class="input-field" name="pass" placeholder="Enter Password" id="show" required>
					<input type="checkbox"  onclick="myFunction()"><p>Show password</p><br><br>
		            <button type="submit" class="submit-btn" name="login">Log in</button>
		        </form>
		      
            </div>
          </div>
	   
</body>
<script>
        
	
		  function myFunction() {
  var x = document.getElementById("show");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	
	var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
	
	</script>
	
</html>
