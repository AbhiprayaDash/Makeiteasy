<?php
	  $db=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
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
			
	if($ck == $ck1){
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM math WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: https://makeiteasy-vssut.herokuapp.com/new 1.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=https://makeiteasy-vssut.herokuapp.com/new 1.php'>";
		}
	}
	}
?>
<?php
	  $db=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{ 
$id = $_GET['del'];
 
$query="SELECT * FROM maths2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
echo "<pre>";
print_r($row);
echo "</pre>";
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
	$userid=(int)$row['id'];
	
			$ck1= (int)$cook;
		
			echo $ck1;
			echo $ck;
			echo $row['Nameofbook'];
			
	if($ck == $ck1){
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM maths2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location:https://makeiteasy-vssut.herokuapp.com/new 1.php");
		
	}
	else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=https://makeiteasy-vssut.herokuapp.com/new 1.php'>";
		}
	
	
	}
	}
?>
<?php
	  $db=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM chemistry where id='$id'";
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
			
	if($ck == $ck1){
       
		$id = $_GET['del'];
		echo gettype($id);
		
		$sql= "DELETE FROM chemistry WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location:https://makeiteasy-vssut.herokuapp.com/new 1.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=https://makeiteasy-vssut.herokuapp.com/new 1.php'>";
		}
	}
	}
?>


<?php
	  $db=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
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
			
	if($ck == $ck1){
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM ce WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: https://makeiteasy-vssut.herokuapp.com/new 1.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=https://makeiteasy-vssut.herokuapp.com/new 1.php'>";
		}
	}
	}
?>



<?php
	  $db=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
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
			
	if($ck == $ck1){
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM basic WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location:https://makeiteasy-vssut.herokuapp.com/new 1.php");
		
	}
	else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=https://makeiteasy-vssut.herokuapp.com/new 1.php'>";
		}
	
	
		
	}
	}
?>



<?php
	  $db=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
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
			
	if($ck == $ck1){
       
		$id = $_GET['del'];
		echo gettype($id);
		
		
		$sql= "DELETE FROM esc WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: https://makeiteasy-vssut.herokuapp.com/new 1.php");
		
	}
	
	else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=https://makeiteasy-vssut.herokuapp.com/new 1.php'>";
		}
		
	}
	}
?>