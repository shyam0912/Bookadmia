<?php
include "database.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }

}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
  background-color: powderblue;

}

.container {
  position: relative;
  max-width: 900px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 96.45%;
  padding: 20px;
}
</style>


</head>



<body>
<div class="container">
  <img src="https://img1.goodfon.com/wallpaper/nbig/6/79/library-study-book-notebook.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Get the right book for you!</h1>
   <p>Categorized according to semesters, universities, and genre; find your desired book at BOOKADEMIA!</p>
  </div>
</div>

<div class="about-section">
  <h1>About Us</h1>
  <p>Welcome to Bookademia!</p>
  <p>Your one-stop platform, for all college resources. Worried where to find your college resources?? That one reference book which would help you ace the exam? That one book for enrichment that would help you clear your concepts?? We got you covered! Browse our catalogue to find college books and other resources, of your choice! Discover the closest book stores near you, along with detailed description about the stock, price, store timings, map locations; all of it at your fingertips! Choose whether to go to the store to purchase the book, or place the order with us!!</p>
	</div>
<hr>
<div class="Services">

<h1>SERVICES</h1>
<p >➡ One stop for all academic college book resources.<br><br>

➡ Students can choose to place order online.<br><br>

➡ Detailed contact information, map location, stock of the requested book(s), all provided under one roof.<br><br>
➡ Easy to access and user friendly.</p>
<p align="right"><i><font color=#0C07A3> *Join our popular directory of  reputed book providers by sending us a mail at  bookademia@gmail.com</i></p>
</div>
	

</body>
</html>
