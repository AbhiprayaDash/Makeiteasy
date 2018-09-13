<?php
	  $db = mysqli_connect("localhost", "root", "", "abhi");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM user where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "abhi");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM user WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: logadmin.php");
		
	
	
	
	}
	}
?>

<?php
	  $db = mysqli_connect("localhost", "root", "", "abhi");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM userp where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "abhi");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM userp WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: logadmin.php");
		
	
	
	
	}
	}
?>