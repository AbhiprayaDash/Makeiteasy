<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
 
$query="SELECT * FROM cs4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cs4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ee4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ee4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM eee4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM eee4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM me4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM me4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>




<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ce4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM metallurgy4 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM metallurgy4 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cs42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cs42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ee42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ee42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM eee42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM eee42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>




<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM me42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM me42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ce42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM metallurgy42 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM metallurgy42 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 4.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 4.php'>";
		}
	}
	}
?>