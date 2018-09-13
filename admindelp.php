<?php
	  $db = mysqli_connect("localhost", "root", "", "product");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM p1 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "product");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM p1 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: adminp.php");
		
	
	
	
	}
	}
?>
<?php
	  $db = mysqli_connect("localhost", "root", "", "product");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM p2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "product");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM p2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: adminp.php");
		
	
	
	
	}
	}
?>
<?php
	  $db = mysqli_connect("localhost", "root", "", "product");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM p3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "product");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM p3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: adminp.php");
		
	
	
	
	
	}
	}
?>