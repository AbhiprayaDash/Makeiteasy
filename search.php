<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM math WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Maths ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:100px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/images/".$row['image']."' style='height:220px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>


<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM maths2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
BEE & Mechanics ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:100px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/1phy/".$row['image']."' style='height:220px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>
<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM chemistry WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
English & Physics ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:100px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/1eng/".$row['image']."' style='height:220px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>
<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ce WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Mathematics-2 ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:100px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/2m2/".$row['image']."' style='height:220px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>


<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM basic WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
BE & CP ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:100px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/2be2/".$row['image']."' style='height:220px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>

<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM esc WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ESC & Chemistry ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:100px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/2esc/".$row['image']."' style='height:220px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>


		
	
