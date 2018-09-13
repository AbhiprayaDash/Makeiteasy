<?php
	$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cs3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){

	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];	
		
		$sql= "DELETE FROM cs3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>



<?php
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ee3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ee3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM eee3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM eee3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM me3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM me3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>




<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM chemical3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM chemical3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM metallurgy3 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM metallurgy3 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cs32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cs32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>





<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ee32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ee32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM eee32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM eee32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>



<?php
	 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>




<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM me32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM me32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>


<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ce32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>



<?php
	  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM metallurgy32 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	if($cook==$row['uid']){
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM metallurgy32 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: new 3.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
		}
	}
	}
?>