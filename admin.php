<html>
<body>
<h1>First Year Books</h1>
</body>
</html>




<?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 $output='';

 $query="SELECT * FROM math";
 $result=mysqli_query($db,$query);

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
   echo "<li><a href='admindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="https://makeiteasy-vssut.herokuapp.com/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 
 <?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 $output='';
 $query="SELECT * FROM maths2";
 $result=mysqli_query($db,$query);

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
   echo "<li><a href='admindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="https://makeiteasy-vssut.herokuapp.com/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 
 <?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 $output='';
 $query="SELECT * FROM chemistry";
 $result=mysqli_query($db,$query);

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
   echo "<li><a href='admindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="https://makeiteasy-vssut.herokuapp.com/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 <?php
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 $output='';
 $query="SELECT * FROM ce";
 $result=mysqli_query($db,$query);

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
   echo "<li><a href='admindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="https://makeiteasy-vssut.herokuapp.com/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 <?php
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 $output='';
 $query="SELECT * FROM basic";
 $result=mysqli_query($db,$query);

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
   echo "<li><a href='admindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="https://makeiteasy-vssut.herokuapp.com/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 
 <?php
 $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
 $output='';
 $query="SELECT * FROM esc";
 $result=mysqli_query($db,$query);

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
   echo "<li><a href='admindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="https://makeiteasy-vssut.herokuapp.com/books.php" name="logout" >Log out</a></li>';

 
 ?>