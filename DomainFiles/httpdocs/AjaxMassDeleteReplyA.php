<?php
session_start();

require '../CS/Cs.php';



if (!isset($_SESSION['PlayerName'])){
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));

}else{

$DestroyAllOf=$_SESSION['PlayerName'];

$DeleteReply=mysqli_query($conn,"DELETE From notificationtopic Where OwnerOfTopic='$DestroyAllOf'");

}

?>