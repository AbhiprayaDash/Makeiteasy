<html>
<body>
<h1>Products For Sale</h1>
</body>
</html>




<?php
 $link=mysqli_connect("localhost","root","","product");
 $output='';

 $query="SELECT * FROM p1";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>Description</th>
 <th>Name of Product</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['Description'];
 $name=$row['NameofProduct'];
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
   echo "<li><a href='admindelp.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 <?php
 $link=mysqli_connect("localhost","root","","product");
 $output='';

 $query="SELECT * FROM p2";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>Description</th>
 <th>Name of Product</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['Description'];
 $name=$row['NameofProduct'];
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
   echo "<li><a href='admindelp.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 
 <?php
 $link=mysqli_connect("localhost","root","","product");
 $output='';

 $query="SELECT * FROM p3";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>image</th>
 <th>Description</th>
 <th>Name of Product</th>
 <th>Contactno</th>
 <th>UID</th>
 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $img=$row['image'];
 $imgtxt=$row['Description'];
 $name=$row['NameofProduct'];
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
   echo "<li><a href='admindelp.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>