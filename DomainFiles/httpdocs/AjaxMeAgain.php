<?php
session_start();
$CheckItOut=$_GET['post'];
require '../CS/Cs.php';

$HereWeGoAgain=mysqli_query($conn,"SELECT ReplyTo FROM reply WHERE id='$CheckItOut'");
$hereTrans=mysqli_fetch_array($HereWeGoAgain);
$Owner=$hereTrans['ReplyTo'];

if (!isset($_SESSION['PlayerName'])  || !isset($_GET['post']) || $_SESSION['PlayerName']!=$Owner){
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));

}else{

$DeleteReply=mysqli_query($conn,"DELETE From Reply Where id='$CheckItOut'");

}

?>