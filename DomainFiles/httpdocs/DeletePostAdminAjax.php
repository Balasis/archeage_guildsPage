<?php 
session_start();
$CheckItOut=$_GET['post'];
require '../CS/Cs.php';
if (isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']==true && isset($_GET['post'])){
$DeleteFromAdmin=mysqli_query($conn,"DELETE FROM post WHERE id='$CheckItOut'");
}else{
$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));


}

?>