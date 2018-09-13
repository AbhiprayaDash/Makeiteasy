<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{ 

$id = $_GET['del'];

$query="SELECT * FROM users where id='$id'";

$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		$sql= "DELETE FROM users WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{ 

$id = $_GET['del'];

$query="SELECT * FROM ee1 where id='$id'";

$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		$sql= "DELETE FROM ee1 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>

<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cp where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];

       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cp WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	}
	}
?>


<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>


<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM be where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM be WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
		
	}
	}
?>




<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
		
	}
	}
?>





<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	

	
	}
	}
?>





<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM chemical where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM chemical WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
		
	}
	}
?>





<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM met where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM met WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>





<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cs2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cs2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>





<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ee2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ee2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
		
		}
	}
	
?>


<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM eee2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM eee2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
		
	}
	}
?>




<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM me2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];

       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM me2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	

	
		
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	}
	}
?>


<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];

       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ce2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>



<?php
	   $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM met2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM met2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin2.php");
		
	
	
	
	
	}
	}
?>