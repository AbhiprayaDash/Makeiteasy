<?php
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM p1 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM p1 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: product.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 2.php'>";
		}
	}
	}
?>
<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM p2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM p2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: product.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 2.php'>";
		}
	}
	}
?>
<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM p3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM p3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: product.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 2.php'>";
		}
	}
	}
?>