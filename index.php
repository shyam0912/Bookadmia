<?php
include "database.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scope=1.0">
    <title>Bookademia</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    
	
	
	<div class="full-page">
		<div class="box">
	<p>Welcome to <strong>Bookademia</strong> - your one stop compiler-cum-online college resource store!
			</p>
	</div>
	<div class="log">
       <img src="log.jpeg" alt="log" width="500px" height="200px">
      </div>
     <div class="navbar">
      
             <nav>
                <ul id="MenuItems">
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><button class="loginbtn" onClick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
              </nav>
      </div>
		
		<?php
		if(isset($_POST["login"]))
		{
			$user=$_POST["user"];
			$pass=$_POST["pass"];

$sql="select * from user where username='$user' and password='$pass'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	$ro=$res->fetch_assoc();
	$_SESSION["ID"]=$ro["aid"];
	$_SESSION["A"]=$ro["firstname"];
	
header('Location:home.php');
}
			else{
				echo "<font color='red'>invalid username or password</font>";
			
			}
		

		}

	?>
		
        <div id="login-form" class="login-page">
          <div class="form-box">
            <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" onclick="login()" class="toggle-btn">Log in</button>
                    <button type="button" onclick="register()" class="toggle-btn">Register</button>
            </div>
                <form id="login" class="input-group-login" action="" method="post">
                    <input type="email" class="input-field" placeholder="Email Address" name="user" required >
		            <input type="password" class="input-field" placeholder="Password" name="pass" id="show" required>
					<input type="checkbox" onclick="myFunction()"><p>Show password</p><br><br><br><br>
		            <button type="submit" class="submit-btn" name="login">Log in</button>
		        </form>
			  
		<?php
		if(isset($_POST["register"]))
		{
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$user=$_POST["user"];
			$pass=$_POST["pass"];
			$cpass=$_POST["cpass"];
			
			if($pass==$cpass){
			

				$sql="insert into user(firstname,lastname,username,password) values('$fname','$lname','$user','$pass')";

				if($db->query($sql))
				{
				header('Location:index.php');
				}
				else{
					   echo "<font color='red'>failed</font>";
					}
				}
			else{
				echo "<font color='red'>password not matching</font>";
			}
		

		}

	?>		  
			  
		        <form id="register" class="input-group-register" action="" method="post">
		            <input type="text" class="input-field" placeholder="First Name" name="fname" required>
		            <input type="text" class="input-field" placeholder="Last Name" name="lname" required>
		            <input type="email" class="input-field" placeholder="Email Address" name="user" required>
		            <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
		            <input type="password" class="input-field" placeholder="Confirm Password" name="cpass"  required><br><br><br><br><br>
		            <span>Passwords must be at least 8 characters long, with atleast one digit, uppercase, lowercase and special character.</span>
                    <button type="submit" class="submit-btn" name="register">Register</button>
	            </form>
            </div>
          </div>
	   </div>
	
	<div class="sidenav" id="mySidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminlogin.php">Admin</a> 
		<a href="storelogin.php">Store login</a>
		
	</div>
	
	<div class="main">
		<span style="font-size:30px;cursor:pointer;color: floralwhite" onclick="openNav()">&#9776; </span>
    </div>
    
	<script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	
	</script>
	
	<script>
	  function myFunction() {
  var x = document.getElementById("show");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
    
	<script>
	  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
	</script>
	
</body>
</html>