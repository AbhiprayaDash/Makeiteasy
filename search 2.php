<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM users WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
 cse & IT 3rd Sem->found <?php echo $query->num_rows;?> results;
</div>
<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/img1/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ee1 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EE 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		$me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/image3/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM cp WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EEE 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/img3/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM etc WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ETC 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/etc img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM be WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ME 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/mech img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM pe WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
PE 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/pe img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM civil WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Civil Engineering 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/civil img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM chemical WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Chemical 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/ce img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM met WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Metallurgy 3rd sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/met img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM cs2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
CSE & IT 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/cs2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ee2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EE 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/ee2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM eee2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EEE 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/eee2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM etc2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ETC 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/etc2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM me2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ME 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/me2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM pe2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
PE 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/pe2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM civil2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Civil Engineering 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/civil2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ce2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Chemical 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/ce2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM met2 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Metallurgy 4th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/met2 img/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 2.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>

