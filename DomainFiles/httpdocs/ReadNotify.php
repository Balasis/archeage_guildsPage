<?php
session_start();
$CheckItOut=$_GET['topic'];
require '../CS/Cs.php';
$FindOwner=mysqli_query($conn,"SELECT StartedBy FROM topic WHERE id='$CheckItOut'");
$TransFind=mysqli_fetch_array($FindOwner,MYSQLI_ASSOC);
$Owner=$TransFind['StartedBy'];


if (!isset($_SESSION['PlayerName'])  || !isset($_GET['topic']) || $_SESSION['PlayerName']!=$Owner){
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));

}else{

$DenyNotify=mysqli_query($conn,"DELETE FROM notificationtopic  WHERE whichTopic='$CheckItOut'");

}

?>