<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");

 require 'vendor/autoload.php';
  
  use Aws\S3\S3Client;
  use Aws\S3\Exception\S3Exception;
// AWS Info
	$bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5cs/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }
  	$sql = "INSERT INTO cs3 (image,image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql);
	

  
  }
  
 
  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result = mysqli_query($db, "SELECT * FROM cs3");
?>

<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $bucketName = 'makeiteasycloud';
  $IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
  $IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['uploads'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5ee/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }
  	$sql2 = "INSERT INTO ee3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql2);
	

  	
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result1 = mysqli_query($db, "SELECT * FROM ee3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable


  // If upload button is clicked ...
  if (isset($_POST['uploads1'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5eee/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql3 = "INSERT INTO eee3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql3);
	

  	
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result2 = mysqli_query($db, "SELECT * FROM eee3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable


  // If upload button is clicked ...
 $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['uploads2'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5etc/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql3 = "INSERT INTO etc3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql3);
	

  	
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result3 = mysqli_query($db, "SELECT * FROM etc3");
  
  ?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable

  // If upload button is clicked ...
  if (isset($_POST['uploads3'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5me/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql4 = "INSERT INTO me3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql4);
	

  
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result4 = mysqli_query($db, "SELECT * FROM me3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
 $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable


  // If upload button is clicked ...
  if (isset($_POST['uploads4'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5pe/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql5 = "INSERT INTO pe3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql5);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result5 = mysqli_query($db, "SELECT * FROM pe3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable


  // If upload button is clicked ...
 $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['uploads5'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5civil/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql6 = "INSERT INTO civil3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql6);
	

 
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result6 = mysqli_query($db, "SELECT * FROM civil3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
$bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable


  // If upload button is clicked ...
  if (isset($_POST['uploads6'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5ce/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql7 = "INSERT INTO chemical3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql7);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result7 = mysqli_query($db, "SELECT * FROM chemical3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";


  // If upload button is clicked ...
$bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['uploads7'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '5met/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql8 = "INSERT INTO metallurgy3 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql8);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result8 = mysqli_query($db, "SELECT * FROM metallurgy3");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
$bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable


  // If upload button is clicked ...
  if (isset($_POST['uploads8'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6cs/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql9 = "INSERT INTO cs32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql9);
	

  
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result9 = mysqli_query($db, "SELECT * FROM cs32");
?>

<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable


  // If upload button is clicked ...
$bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['uploads9'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6ee/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql10 = "INSERT INTO ee32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result10 = mysqli_query($db, "SELECT * FROM ee32");
?>

<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable

  // If upload button is clicked ...
  if (isset($_POST['uploads10'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6eee/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql10 = "INSERT INTO eee32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result11 = mysqli_query($db, "SELECT * FROM eee32");
?>

<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
 

  // If upload button is clicked ...
$bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  if (isset($_POST['uploads11'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6etc/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql10 = "INSERT INTO etc32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result12 = mysqli_query($db, "SELECT * FROM etc32");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
 $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable


  // If upload button is clicked ...
  if (isset($_POST['uploads12'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6me/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql10 = "INSERT INTO me32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	


  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result13 = mysqli_query($db, "SELECT * FROM me32");
?>

<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
 $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	

  // Initialize message variable
 

  // If upload button is clicked ...
  if (isset($_POST['uploads13'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6pe/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql10 = "INSERT INTO pe32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	

  	
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result14 = mysqli_query($db, "SELECT * FROM pe32");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
   if (isset($_POST['uploads14'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6civil/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }


  	$sql10 = "INSERT INTO civil32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	

  	
  }
  
 
  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result15 = mysqli_query($db, "SELECT * FROM civil32");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
  $bucketName = 'makeiteasycloud';
	$IAM_KEY = 'AKIAJNCZN7DUCKSLM33A';
	$IAM_SECRET = '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';
	
   if (isset($_POST['uploads15'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6ce/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }
  	$sql10 = "INSERT INTO ce32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	

  	
  }
  

  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result16 = mysqli_query($db, "SELECT * FROM ce32");
?>


<?php
  // Create database connection
  $db = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb107cbe0a88e0","5ec91eaf","heroku_5d768b2ae509282");
require 'vendor/autoload.php';
  // Initialize message variable
  $msg = "";
  $cook=$_COOKIE['id'];

  // If upload button is clicked ...
    if (isset($_POST['uploads16'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$name_text = mysqli_real_escape_string($db, $_POST['Nameofbook']);
	$Contactno = mysqli_real_escape_string($db, $_POST['Contactno']);
	
    
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
					),
				'version' => 'latest',
				'region'  => 'ap-south-1',
				'signature' => 'v4'

				
    
)	);
	}

catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("S3ClientError: " . $e->getMessage());
	}
	$keyName = '6met/'. basename($_FILES['image']['name']);
	$pathInS3 = 'https://s3.ap-south-1.amazonaws.com/makeiteasycloud/'. $keyName;
	
	
	// Add it to S3
	try {
		// Uploaded:
	
		
		
		
$s3->upload($bucketName, $keyName, fopen($_FILES['image']['tmp_name'], 'rb'));
		 
    
	}catch (S3Exception $e) {
		die('UploadedError:' . $e->getMessage());
	}
	

    catch (Exception $e) {
		die('Error:' . $e->getMessage());
	  }

  	$sql10 = "INSERT INTO metallurgy32 (image, image_text,Nameofbook,Contactno,uid) VALUES ('$image', '$image_text','$name_text','$Contactno','$cook')";
  	// execute query
  	mysqli_query($db, $sql10);
	

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  
 else{
	  $message="please select an image";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;url=new 3.php'>";
  }
  }
   
  if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }
}
  $result17 = mysqli_query($db, "SELECT * FROM metallurgy32");
?>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
    #content{
   	width: 70%;
   	margin: 10px auto;
   	
   }
   
   #content2{
	   	width: 70%;
   	margin: 20px auto;
   }
   .searchholder{
	   position:absolute;
	   width:80vw;
	   left:50%;
	   transform:translateX(-50%);
	   max-width: none;
   }
   #icon{
	       position: absolute;
    left: 10px;
    top: 7px;
	color:black;
   }
   #content3{
	   	width: 70%;
   	margin: 20px auto;
   }
	   
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   
   }
   
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 240px;
   }
    #img_1div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   
   }
   #img_1div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
 
   .fb-comments{
	   padding-top:250px;
	   float:left;
   }
   .fb-like{
	   margin-top:50px;
	   padding-left:0px;
   }
 .band{
	  height:200px;
	   background-color:white;
	   margin-top:0px;
	   padding-top:0px;
   }
   .txt{
	 border: 2px solid black;
    border-radius: 10px;
   }
   .card-deck{
	   width:100%;
	   
   }
   #crd{
	   margin-left:auto;
	   margin-right:auto;
	   width:100%;
	     background-color:;
  
   }
.my{}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    margin-top: 70px;
}
#choose{
	width:100%;
}
.textarea{
	width:100%;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.para{
	color:red;
}
.col-lg-5{
	font-size:25px;
	margin-left:1000px;
	color:blue;
}
#header{
	
background:url(photo-1518373714866-3f1478910cc0.jpg);
background-size:cover;
height:600px;

background-attachment:fixed;
padding:15px 20px 20px 15px;
width:100%;
position:relative;
margin-top:0px;
margin-bottom:50px;
}
.icon{
	font-size:35px;
	margin-left:10px;
}
.span{
	font-size:25px;cursor:pointer;float:left;color:white;
}
	

/*--------------------------------------------------------------
# Navigation Menu
-------------------------------------------------------------*/
/* Nav Menu Essentials */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}

/* Nav Menu Arrows */
.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}

/* Nav Meu Container */
#nav-menu-container {
  float: right;
  margin: 0;
 
  
}

@media (max-width: 768px) {
  #nav-menu-container {
    display: none;
  }
}

/* Nav Meu Styling */
.nav-menu a {
  padding-bottom:10px;
  text-decoration: none;
  display: inline-block;
  color: #fff;
  font-family: "sans-serif", sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  font-size: 20px;
  outline: none;
}

.nav-menu > li {
  margin-left: 10px;
}

.nav-menu > li > a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: black;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .menu-active > a:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

.nav-menu ul {
  margin: 4px 0 0 0;
  border: 0px solid #e7e7e7;
}

.nav-menu ul li {
  background: #fff;
}

.nav-menu ul li:first-child {
  border-top: 0;
}

.nav-menu ul li a {
  padding: 10px;
  color: #333;
  transition: 0.3s;
  display: block;
  font-size: 15px;
  text-transform: none;
}

.nav-menu ul li a:hover {
  background: #2dc997;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */
#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 20px 20px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: #fff;
}

@media (max-width: 768px) {
  #mobile-nav-toggle {
    display: inline;
  }
}

/* Mobile Nav Styling */
#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(52, 59, 64, 0.9);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}

#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;
}

#mobile-nav ul li a {
  color: #fff;
  font-size: 16px;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
}

#mobile-nav ul li a:hover {
  color: #fff;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: #2dc997;
}

#mobile-nav ul .menu-item-active {
  color: #2dc997;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(52, 59, 64, 0.9);
  display: none;
}

/* Mobile Nav body classes */
body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}
.form-group{
	margin:auto;
	margin-top:200px;
	padding: 6px;
	font-size: 27px;
  width:40%;
  border:2px 3px 2px 3px;
      -webkit-box-flex: 1;
    flex-grow: 1;
	-webkit-appearance: textfield;
    box-sizing: content-box;
	position:relative;
}
.fas fa-search{
	color:fas fa-search;
}
input[type=text]{
	border: 2px solid white;
    border-radius: 5px;
	padding-left:50px;
	height:40px;
	width: calc(100% - 120px);
	
}
nav{
	height:70px;
}
.txt{
	background-color:#DBD4D3;
	
}
#btn1{
	
	font-size:15px;
	position:absolute;
	right:10px;
	top:3px;
}
.form{
	
	position:relative;
	
}
.nav-menu-container{
	background-color:black;
}
.nav-menu{
	padding-top:50px;
}
ul li a:hover{
	font-color:yellow;
	background:black;
}


.flex-container {
  display: flex;
  flex-wrap: wrap;
justify-content:center;
align-content: space-evenly;
  width:100%;
}

.flex-container > div {
  background-color:;
  width:23.4%;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
@media (max-width: 768px) {
	#frm {
    width: 80%;
    margin: 20px auto;
	
}
.txt{
	width:80%;
}
.flex-container > div {
  background-color:;
  width:44%;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
.flex-container {
  display: flex;
  flex-wrap: wrap;
justify-content:center;
  width:100%;
}
.icon{
	font-size:20px;
	margin-left:0px;
}
#buttonc{
	display:none;
}
.span{
	font-size:15px;cursor:pointer;float:left;color:white;
}
#header{
	
background:url(buk.jpg);

height:600px;

background-attachment:fixed;
padding:15px 20px 20px 15px;
width:100%;
position:relative;
margin-top:0px;
margin-bottom:50px;
}
}
@media (max-width: 768px) {
	#frm {
    width: 80%;
    margin: 20px auto;
	
}
form{
	width:80%;
}
.txt{
	width:80%;
}
.flex-container > div {
  background-color:;
  width:44%;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
.flex-container {
  display: flex;
  flex-wrap: wrap;
justify-content:center;
  width:100%;
}
.icon{
	font-size:20px;
	margin-left:0px;
}
#buttonc{
	display:none;
}
.span{
	font-size:15px;cursor:pointer;float:left;color:white;
}
.btn-danger{
	width:100%;
}
#header{
	
background:url(buk.jpg);

height:600px;

background-attachment:fixed;
padding:15px 20px 20px 15px;
width:100%;
position:relative;
margin-top:0px;
margin-bottom:50px;
}
}
<!--sidebar -->
.sidenav1 {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav1 a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.sidenav1 a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
}



/* Add an active class to the active dropdown button */
.active {
    background-color: green;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav1 {padding-top: 15px;}
    .sidenav1 a {font-size: 18px;}
}



</style>
<link href="img/83087_5073552_883174_image.jpg" rel="icon">
  <link href="img/83087_5073552_883174_image.jpg" rel="apple-touch-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fontawesome.com/icons/book-open?style=regular">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!-- Latest compiled JavaScript -->
<link href="img/83087_5073552_883174_image.jpg" rel="icon">
  <link href="img/83087_5073552_883174_image.jpg" rel="apple-touch-icon">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="band">

<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-fixed-top">
<span  class="span" onclick="openNav()">&#9776; open</span>
  <a class="navbar-brand" href="#" style="color:#387780;float:left;"><div class="icon"><i class="fas fa-book-open fas-2x">Books Sell And Purchase</i></div><br></a>
  <button class="navbar-toggler" type="button" id="buttonc" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" style="float:right;">
     
     <li class="nav-item ">
        <a class="nav-link" href="http://localhost/New folder/index.php" style="color:#387780;font-size:20px;">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"  style="color:#387780;font-size:20px;"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         First Semester
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#cs1">CSE&IT</a>
          <a class="dropdown-item" href="#ee1">EE</a>
		  <a class="dropdown-item" href="#eee1">EEE</a>
		  <a class="dropdown-item" href="#etc1">ETC</a>
          <a class="dropdown-item" href="#me1">Mechanical</a>
		  <a class="dropdown-item" href="#pe1">Production</a>
		  <a class="dropdown-item" href="#ce1">Civil</a>
		  <a class="dropdown-item" href="#chem1">Chemical</a>
		  <a class="dropdown-item" href="#met1">Metallurgy</a>
        </div>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"  style="color:#387780;font-size:20px;"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Second Semester
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#cs2">CSE&IT</a>
          <a class="dropdown-item" href="#ee2">EE</a>
		  <a class="dropdown-item" href="#eee2">EEE</a>
		  <a class="dropdown-item" href="#etc2">ETC</a>
          <a class="dropdown-item" href="#me2">Mechanical</a>
		  <a class="dropdown-item" href="#pe2">Production</a>
		  <a class="dropdown-item" href="#ce2">Civil</a>
		  <a class="dropdown-item" href="#chem2">Chemical</a>
		  <a class="dropdown-item" href="#met2">Metallurgy</a>
        </div>
      </li>
	  
	 
    </ul>
  </div>
</nav>






 
<div id="header" class="head">

  
  <div class="container-fluid">
   <div class="col-md-12 col-sm-12">  
	 <div class="form-group">
	 <form action="search 3.php" method="get" class="form">
	 <label class="searchholder"><i class="fas fa-search" id="icon"></i>
	
	 <input type="text" placeholder="Search.."  class="form-control" name="keywords" id="search_text" autocomplete="off">
	 <input type="submit" value="search" id="btn1" class="btn btn-light"></input></label>
</form>
</div>
</div>
</div>
</div>
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br><br>
  <div class="sidenav1">
  
   <a href="https://makeiteasy-vssut.herokuapp.com/index.php">Home</a>
  <a href="https://makeiteasy-vssut.herokuapp.com/new%201.php">First Year</a>
  
  <a href="https://makeiteasy-vssut.herokuapp.com/new%202.php">Second Year</a>
   <button class="dropdown-btn">Third Year 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <button class="dropdown-btn">First Semester 
    <i class="fa fa-caret-down"></i>
  </button>
   <div class="dropdown-container">
   <a href="#cs1">CSE&IT</a>
          <a  href="#ee1">EE</a>
		  <a  href="#eee1">EEE</a>
		  <a  href="#etc1">ETC</a>
          <a href="#me1">Mechanical</a>
		  <a  href="#pe1">Production</a>
		  <a  href="#ce1">Civil</a>
		  <a  href="#chem1">Chemical</a>
		  <a  href="#met1">Metallurgy</a>
		  <hr>
  </div>
   <button class="dropdown-btn">Second Semester 
    <i class="fa fa-caret-down"></i>
  </button>
   <div class="dropdown-container">
   <a href="#cs2">CSE&IT</a>
          <a  href="#ee2">EE</a>
		  <a  href="#eee2">EEE</a>
		  <a  href="#etc2">ETC</a>
          <a href="#me2">Mechanical</a>
		  <a  href="#pe2">Production</a>
		  <a  href="#ce2">Civil</a>
		  <a  href="#chem2">Chemical</a>
		  <a  href="#met2">Metallurgy</a>
		  <hr>
  </div>
  </div>
  <a href="https://makeiteasy-vssut.herokuapp.com/new%204.php">Fourth Year</a>
  

 
 
  </div>
  </div>
  
  </div>
  </header>





<section id="first">
<h1 style="font-size:40px;text-align:center;padding-top:50px;font-family:roboto;">First Semester</h1>
<hr>
<section id="cs1">
<h2 style="text-align:center;font-family:roboto;">Computer Science & IT</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data" >
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="upload" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php

 $cook=$_COOKIE['id'];
 while ($row = mysqli_fetch_array($result)) {
		 $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5cs/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
	 

    }
  ?>
 
</div>
</div>
</section>
<section id="ee1">

<h2 style="text-align:center;font-family:roboto;">Electrical Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
 while ($row = mysqli_fetch_array($result1)) {
	 	 $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5ee/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";

    }
  ?>
 
</div>
</div>
</section>
<section id="eee1">
<h2 style="text-align:center;font-family:roboto;">EEE</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads1" value="upload image">
</div>
</form>

<div class="card-deck">
<div class="flex-container">
 <?php
        while ($row = mysqli_fetch_array($result2)) {
			 $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5eee/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
	 
    }
  ?>
 
</div>
</div>
</section>
<section id="etc1">

<h2 style="text-align:center;font-family:roboto;">ETC</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads2" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result3)) {
			 $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5etc/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
          
    }
  ?>
 
</div>
</div>
</section>
<section id="me1">

<h2 style="text-align:center;font-family:roboto;">Mechanical Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads3" value="upload image">
</div>
</form>

<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result4)) {
          $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5me/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="pe1">

<h2 style="text-align:center;font-family:roboto;">Production Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads4" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result5)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5pe/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="ce1">

<h2 style="text-align:center;font-family:roboto;">Civil Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads5" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result6)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5civil/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="chem1">

<h2 style="text-align:center;font-family:roboto;">Chemical Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads6" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result7)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5ce/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="met1">

<h2 style="text-align:center;font-family:roboto;">Metallurgy</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads7" value="upload image">
</div>
</form>

<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result8)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/5met/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
</section>
<hr>

<section id="Second">
<h1 style="text-align:center;padding-top:50px;font-size:50px;font-family:roboto;">Second Semester</h1>
<hr>
<section id="cs2">
<h2 style="text-align:center;font-family:roboto;">Computer Science & IT</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads8" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
 while ($row = mysqli_fetch_array($result9)) {
	 $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6cs/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
	 

    }
  ?>
 
</div>
</div>
</section>
<section id="ee2">

<h2 style="text-align:center;font-family:roboto;">Electrical Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads9" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result10)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6ee/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="eee2">
<h2 style="text-align:center;font-family:roboto;">EEE</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads10" value="upload image">
</div>
</form>

<div class="card-deck">
<div class="flex-container">
 <?php
        while ($row = mysqli_fetch_array($result11)) {
          
		   $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6eee/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="etc2">

<h2 style="text-align:center;font-family:roboto;">ETC</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads11" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result12)) {
            $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6etc/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="me2">

<h2 style="text-align:center;font-family:roboto;">Mechanical Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads12" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result13)) {
          $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6me/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="pe2">

<h2 style="text-align:center;font-family:roboto;">Production Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads13" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result14)) {
            $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6pe/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="ce2">

<h2 style="text-align:center;font-family:roboto;">Civil Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads14" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result15)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6civil/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="chem2">

<h2 style="text-align:center;font-family:roboto;">Chemical Engineering</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads15" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result16)) {
           $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6ce/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
<section id="met2">

<h2 style="text-align:center;font-family:roboto;">Metallurgy</h2>
<hr>
<form method="post" action="new 3.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" class="btn btn-danger" name="image">
</div>
<div class="textarea">
<textarea name="Nameofbook" class="txt" cols="20" rows="4" placeholder="Name of book"></textarea>
<textarea name="image_text" class="txt" cols="40" rows="4" placeholder="Price"></textarea>
<textarea name="Contactno" class="txt" cols="15" rows="4" placeholder="Contact no"></textarea>
</div>
<div>
<input type="submit" class="btn btn-success"name="uploads16" value="upload image">
</div>
</form>


<div class="card-deck">
<div class="flex-container">
 <?php
 $cook=$_COOKIE['id'];
        while ($row = mysqli_fetch_array($result17)) {
            $cook=$_COOKIE['id'];
	 $me=$row['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	   
      	echo "<a href=''><img src='https://s3.ap-south-1.amazonaws.com/makeiteasycloud/6met/".$row['image']."' class='card-img-top'></a>";
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>Book Name<br>".$row['Nameofbook']."</h5>";
		echo " <h5 class='card-title'>Price<br>".$row['image_text']."</h5>";
		echo " <h5 class='card-title'>Contactno<br>".$row['Contactno']."</h5>";
      	
		if($cook==$row['uid']){
			echo "<div class='card-footer'>";
	     echo "<a href='del 3.php?del=$me'><button type='button' class='btn btn-danger'>delete</button></a><br />";
		 echo "</div>";
		}
      echo "</div>";
	  echo "<hr style='width:100%; color:black;'>";
	  echo "</div>";
	  echo "</div>";
    }
  ?>
 
</div>
</div>
</section>
</section>


</body>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</html>



