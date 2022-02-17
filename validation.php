<?php

session_start();



$con = new mysqli("localhost","root","","library");

//mysqli_select_db($con, 'ivs_data_base');


if(isset($_POST["login"])){


$email= $_POST['user'];
$password= $_POST['pass'];



$s = "select * from user where username = '$email' and password = '$password'";

$res=$con->query($s);
    if($res->num_rows>0)
    {
        $ro=$res->fetch_assoc();
        $_SESSION["email"]=$ro["username"];
        $_SESSION["password"]=$ro["password"];
        if($ro["VOTE"]==0)
        {
            echo "<script>window.open('home.php','_self')</script>";
        }
        else{
            echo "<CENTER><H3> already voted </H3></CENTER>";

        }
    }
    else
    {
        echo '<CENTER><H3> INVALID USERNAME or PASSWORD </H3></CENTER>';
    }
}

?>
