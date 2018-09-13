<?php
	  $db = mysqli_connect("localhost", "root", "", "imgupload");
 
	if( isset($_GET['del']) )
	{   
 $db = mysqli_connect("localhost", "root", "", "imgupload");
$query="SELECT * FROM profileimg";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "imgupload");
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM profileimg WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
		}
	}
	
?>
 
 
 
 <?php
	  $db = mysqli_connect("localhost", "root", "", "imgupload");
 
	if( isset($_GET['del']) )
	{   
 $db = mysqli_connect("localhost", "root", "", "imgupload");
$query="SELECT * FROM maths2";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "imgupload");
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM maths2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
		}
	}
	
?>

 <?php
	  $db = mysqli_connect("localhost", "root", "", "imgupload");
 
	if( isset($_GET['del']) )
	{   
 $db = mysqli_connect("localhost", "root", "", "imgupload");
$query="SELECT * FROM chemistry";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "imgupload");
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM chemistry WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
		}
	}
	
?>


 <?php
	  $db = mysqli_connect("localhost", "root", "", "imgupload");
 
	if( isset($_GET['del']) )
	{   
 $db = mysqli_connect("localhost", "root", "", "imgupload");
$query="SELECT * FROM maths2";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "imgupload");
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM maths2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
		}
	}
	
?>



 <?php
	  $db = mysqli_connect("localhost", "root", "", "imgupload");
 
	if( isset($_GET['del']) )
	{   
 $db = mysqli_connect("localhost", "root", "", "imgupload");
$query="SELECT * FROM maths2";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "imgupload");
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM maths2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
		}
	}
	
?>
 



