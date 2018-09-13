<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM math where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			
	
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM math WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	
	
	
	
	}
	}
?>
<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{ 
$id = $_GET['del'];
 
$query="SELECT * FROM maths2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);

if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			

       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM maths2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	}
	
	
	}
	
?>
<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM chemistry where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "imguploads");
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			

       
		$id = $_GET['del'];
		echo gettype($id);
		
		$sql= "DELETE FROM chemistry WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	
	
	
		
	}
	}
?>


<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			
	
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM ce WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	

	
		
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{  
$id = $_GET['del'];
$query="SELECT * FROM basic where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			
	
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM basic WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	
	
	
		
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM esc where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			
	
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM esc WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin.php");
		
	
	
	
		
	}
	}
?>