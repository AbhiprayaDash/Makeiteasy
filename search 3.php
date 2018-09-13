<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
$cook=$_COOKIE['id'];
if(isset($_GET['keywords'])){
	
	
$keywords=$db->escape_string($_GET['keywords']);
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM cs3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
 cse & IT 5th Sem->found <?php echo $query->num_rows;?> results;
</div>
<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5cs/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ee3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EE 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		$me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5ee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM eee3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EEE 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5eee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM etc3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ETC 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5etc/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM me3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ME 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5me/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM pe3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
PE 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5pe/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM civil3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Civil Engineering 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5civil/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM chemical3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Chemical 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5ce/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM metallurgy3 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Metallurgy 5th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5met/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM cs32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
CSE & IT 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6cs/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ee32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EE 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6ee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM eee32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
EEE 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6eee/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM etc32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ETC 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6etc/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM me32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
ME 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6me/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM pe32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
PE 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6pe/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM civil32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Civil Engineering 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6civil/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM ce32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Chemical 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6ce/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
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
$query=$db->query("SELECT id,Nameofbook,image_text,image,Contactno,uid FROM metallurgy32 WHERE id LIKE'%{$keywords}%' OR Nameofbook LIKE '%{$keywords}%' OR image_text LIKE '%{$keywords}%' OR image LIKE '%{$keywords}%' OR Contactno LIKE '%{$keywords}%'OR uid LIKE '%{$keywords}%'");


?>
<div class="result-count">
Metallurgy 6th sem->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
		 $me=$row['id'];
      echo "<div id='img_div' style='height:180px;'>";
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6met/".$row['image']."' style='height:160px;'></a>";
      	echo " <h3 style='color:blue;'>Book Name</h3><p style='font-size:15px;'>".$row['Nameofbook']."</p>";
		echo " <h3 style='color:blue;'>Price</h2><p>".$row['image_text']."</p>";
		echo " <h3 style='color:blue;'>Contact No</h2><p style='font-size:15px;'>".$row['Contactno']."</p>";
		if($cook==$row['uid']){
	     echo "<li><a href='del 3.php?del=$me'>delete</a></li><br />";
		}
      echo "</div>";
	  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	  echo "<hr>";
	   
	   
	 
		}
		
}?>

