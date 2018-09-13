<?php
session_start();

if(array_key_exists("id",$_COOKIE)){
	$_SESSION['id']=$_COOKIE['id'];
}
if(array_key_exists("id",$_SESSION)){

header("Location:https://makeiteasy-vssut.herokuapp.com/product.php");
}
   

else{
	header("Location:https://makeiteasy-vssut.herokuapp.com/produce.php");
}
?>