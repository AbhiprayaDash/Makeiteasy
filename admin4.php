<html>
<body>
<h1>Fourth Year Books</h1>
</body>
</html>




<?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';

 $query="SELECT * FROM users";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 
 <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM esc";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 
 <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM cp";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM chemistry";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM be";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 
 <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM pe";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM civil";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM ce";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM met";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM cs2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM ee2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM eee2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM etc2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM me2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM pe2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
  <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM civil2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
   <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM ce2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
   <?php
 $link=mysqli_connect("localhost","root","","4th");
 $output='';
 $query="SELECT * FROM met2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>image text</th>
 <th>Name of book</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['image_text'];
 $name=$row['Nameofbook'];
 $con=$row['Contactno'];
 $uid=$row['uid'];
echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$img.'</td>
 <td>'.$imgtxt.'</td>
 <td>'.$name.'</td>
 <td>'.$con.'</td>
 <td>'.$uid.'</td>

  </tr>';
   echo "<li><a href='admindel4.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>