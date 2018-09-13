<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
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
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>



<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{ 

$id = $_GET['del'];

$query="SELECT * FROM esc where id='$id'";

$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		$sql= "DELETE FROM esc WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>

<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cp where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];

       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cp WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	}
	}
?>


<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM chemistry where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM chemistry WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>


<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM be where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM be WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
		
	}
	}
?>




<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
		
	}
	}
?>





<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	

	
	}
	}
?>





<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ce WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
		
	}
	}
?>





<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM met where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM met WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>





<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM cs2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM cs2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>





<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ee2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ee2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
		
		}
	}
	
?>


<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM eee2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM eee2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	}
	}
?>



<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM etc2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM etc2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
		
	}
	}
?>




<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM me2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];

       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM me2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	

	
		
	}
	}
?>



<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM pe2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM pe2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	}
	}
?>


<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM civil2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM civil2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>



<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM ce2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];

       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM ce2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>



<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");
 
	if( isset($_GET['del']) )
	{   
$id = $_GET['del'];
$query="SELECT * FROM met2 where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	$db = mysqli_connect("localhost", "root", "", "image_upload");
	$cook=$_COOKIE['id'];
	
       
		$id = $_GET['del'];
		
		$sql= "DELETE FROM met2 WHERE id='$id'";
		$res= mysqli_query($db,$sql);
		
		header("Location: admin3.php");
		
	
	
	
	
	}
	}
?>