<?php
session_start();
$error="";
$hashedpassword="";
if(array_key_exists("logout",$_GET)){
	unset($_SESSION);
	setcookie("id","",time()-60*60*24*365);
	$_COOKIE["id"]="";
}
else if(array_key_exists("id",$_SESSION) OR array_key_exists("id",$_COOKIE)){
	header("Location:");
}
if(array_key_exists("submit",$_POST)){
   $link=mysqli_connect("localhost","root","","abhi");
   if(mysqli_connect_error()){
	   echo "connection unsucessful";
   }
   if($_POST['email']==''){
	   $error.="Email ID is required<br>";
   }
   if($_POST['password']==''){
	   $error.="Password is required<br>";
   }
if($error!=''){
	$error="<p>there are many errors</p>".$error;
}
else{
	if($_POST['signup']=='1'){
	$query="SELECT id FROM user WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' LIMIT 1";
	$result=mysqli_query($link,$query);
	if(mysqli_num_rows($result)>0){
		$error="Email address is taken";
	}
	else{
		$query="INSERT INTO user (email,password) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";
if(mysqli_query($link,$query)){
	 $link=mysqli_connect("localhost","root","","abhi");
	$query="UPDATE user SET password='".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id=".mysqli_insert_id($link)." LIMIT 1";
	mysqli_query($link,$query);
	$_SESSION['id']=mysqli_insert_id($link);
		setcookie("id",mysqli_insert_id($link),time()+60*60*24*365);
	}
	header("Location:books.php");
}
	}
	

	else{
		$query="SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
		$result=mysqli_query($link,$query);
		$row=mysqli_fetch_array($result);
		if(isset($row)){
			$hashedpassword=$_POST['password'];
			if($hashedpassword==$row['password']){
				$_SESSION['id']=$row['id'];
	
					setcookie("id",$row['id'],time()+60*60*24*365);
				
		header("Location:session.php");
			}
		}
			else{
				$error="unsucessful";
		}}
	}
}





?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Regna Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet File -->
  <link href="books.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
#signupform{
	width:30%;
	margin-left:auto;
	margin-right:auto;
}
#sup{
	margin-left:150px;
	margin-right:auto;
}
.showloginform{
	margin-left:150px;
}
@media (max-width: 768px) {
	
	.form-control{
		width:90%;
	margin-left:auto;
	margin-right:auto;
}
.checkbox{
	margin-left:130px;
}
#signupform{
	width:100%;
	margin-left:auto;
	margin-right:auto;
}
#sup{
	margin-left:130px;
	margin-right:auto;
	font-size:20px;
}
#books{
	padding-left:0px;
}
#log{
	margin-left:0px;
	font-size:20px;
}
}
	</style>
  </head>
<body>
<nav>
<nav>
<ul class="soc">
<li><a href='#home'><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
<li><a href='#about'><i class="fa fa-google" aria-hidden="true"></i></a></li>
<li><a href='#my file.html'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</nav>

<section id="books">
<div id="error"><?php echo $error; ?></div>

<form method="post" id="signupform">
<div class="form-group" style="margin-top:250px">
  <input type="email" class="form-control" name="email" placeholder="Email">
  <input type="password" class="form-control" name="password" placeholder="password">
  <div class="checkbox"><label>
  
  <input type="hidden" class="form-control" name="signup" value="1"></br>
   <input type="checkbox"  name="stayloggedin"value=1>Staylogged in</label></div>
  <input type="submit" class="btn btn-primary" style="text-align:center" name="submit" value="signup" id="sup">
  <p><b><a class="showloginform" id="log">Log in</a></b></p>
</div></form>
<form method="post" id="loginform">
<div class="form-group" style="margin-top:250px">
  <input type="email" class="form-control" name="email" placeholder="Email">
  <input type="password" class="form-control" name="password" placeholder="password">
  <div class="checkbox"><label>
   
  <input type="hidden" class="form-control" name="signup" value="0"></br>
  
  <input type="checkbox"  name="stayloggedin"value=1>Staylogged in</label></div>
  <input type="submit" class="btn btn-primary" style="text-align:center" name="submit" value="log in" id="sup">
   <p><b><a class="showloginform" id="log">Sign Up</a></b></p>
</div></form>

</div>
</section>

</body>


<script type="text/javascript">
$(".showloginform").click(function(){
$("#signupform").toggle();
$("#loginform").toggle();
});
</script>
</html>

