<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM cs4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
 cse & IT 7th Sem->found <?php echo $query->num_rows;?> results;
</div>
<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7cs/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>
<?php

$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ee4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EE 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		$me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7ee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>"; 
	   
	   
	 
		}
	
		
}?>
	  
	   
	 

<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM eee4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EEE 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7eee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	
	  echo "<hr>";
	   
	   
	 
		}
		
}?>
<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM etc4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ETC 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7etc/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  	 echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  
	  echo "<hr>";
	   
	   
	 
		}
		
}?>


<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM me4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ME 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7me/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>


<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM pe4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
PE 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7pe/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM civil4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Civil Engineering 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7civil/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ce4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Chemical 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7ce/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM metallurgy4 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Metallurgy 7th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/7met/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	 
	 echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM cs42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
CSE & IT 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8cs/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ee42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EE 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8ee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>




<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM eee42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EEE 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8eee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>


<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM etc42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ETC 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8etc/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM me42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ME 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8me/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>




<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM pe42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
PE 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8pe/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>




<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM civil42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Civil Engineering 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8civil/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>






<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ce42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Chemical 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8ce/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>



<?php
$db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM metallurgy42 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Metallurgy 8th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/8met/".$row['image']."' style='height:180px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 4.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>

