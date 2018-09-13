<html>
<body>
<h1>Log In</h1>
</body>
</html>




<?php
 $link=mysqli_connect("localhost","root","","abhi");
 $output='';

 $query="SELECT * FROM user";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>email</th>
 <th>Password</th>

 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $email=$row['email'];
 $password=$row['password'];

echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$email.'</td>
 <td>'.$password.'</td>


  </tr>';
   echo "<li><a href='logadmindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>
 
 <html>
<body>
<h1>Product Log</h1>
</body>
</html>


 <?php
 $link=mysqli_connect("localhost","root","","abhi");
 $output='';

 $query="SELECT * FROM userp";
 $result=mysqli_query($link,$query);

 echo '<div class="table-responsive">
 <table class="table table bordered">
 <tr>
 <th>ID</th>
 <th>email</th>
 <th>Password</th>

 </tr>';
  while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
 $email=$row['email'];
 $password=$row['password'];

echo '
 <tr>
 <td>'.$id.'</td>
 <td>'.$email.'</td>
 <td>'.$password.'</td>


  </tr>';
   echo "<li><a href='logadmindel.php?del=$id'>$id.delete</a></li><br />";
  
 }
 echo '<li><a href="http://localhost/New%20folder/books.php" name="logout" >Log out</a></li>';

 
 ?>