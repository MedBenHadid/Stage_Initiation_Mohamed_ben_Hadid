<?php
session_start();
$message="";
if(count($_POST)>0) {
mysql_connect("localhost","root","");
mysql_select_db("gf2");
$id=$_POST["id"];
$pass=$_POST["password"];
$result = mysql_query("SELECT * FROM login WHERE id= '$id' and pass= '$pass'");
$row = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row["id"];
$_SESSION["id"] = $row["id"];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:acceuil.php");
}
?>
<html>
<head>
<title>Login</title>

    <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
<style>
  @import "bourbon";

body {
	background: #eee !important;
}
.title{
    color: #0F70F0;
    font-family: 'Varela Round';
     padding: 10px 20px;
    font-weight: bold;
}

.wrapper {
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 650px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}



	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}
.message {
color: #FF0000;
font-weight: bold;
text-align: center;
width: 100%;
}

</style>

</head>
<body>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
  <div class="wrapper">
    <form class="form-signin" name="f" action="" method="POST">
 <center>
    <div class="title"><h1>Gestion Des Facture Tunisair </h1></div>

	<div class="login-group"><h2>CONNEXION :</h2></div>

   <div class="message"><?php if($message!="") { echo $message; } ?></div>
      <input type="text" class="form-control" name="id" placeholder="Votre ID" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button></center>
    </form>
  </div>
</body></html>

