<?php 




?>





<!DOCTYPE html>
<html>
<head>

<style>
	
</style>

<title>test</title>
	<!--CSS-->
	<link rel="stylesheet" href="" type="text/css"/>

   	<!--JAVASCRIPT LIBRARY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!--Resize For Devices-->
	<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>

	<!--Creator-->
	<meta name="author" content="John balasis"/>

	<!--AFK KICK-->
	<meta http-equiv="refresh" content="9000"/>

	<meta charset="UTF-8"/>	

</head>
<body>
<?php
$host="localhost";
$dbUsername="root";
$dbPassword="82468246a!";
$dbname="Guild";
$conn=mysqli_connect($host,$dbUsername, $dbPassword,$dbname);
$result = mysqli_query($conn,"SELECT id, category,LastTopic FROM category");

if ($result->num_rows>0){
echo "<table border=1>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Category</th>";
echo "<th>Last Topic</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo "<tr>";
echo "<td>";
 printf($row["id"]);
 echo "</td>";
 echo "<td>";
 echo "<a href='topics.php?id=";
 echo $row["id"];
 echo "'>";
 echo $row["category"];
echo "</a>";
 echo "</td>";
 echo "<td>";
 printf($row["LastTopic"]);
 echo "</td>";
   
}
echo "</table>";

}else{
	echo 'theres no categories';
}
?>
<p id="News" style="visibility:hidden">dwad</p>
	
</body>
</html>