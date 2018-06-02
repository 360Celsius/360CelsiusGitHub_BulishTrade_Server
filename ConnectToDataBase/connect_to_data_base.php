<?php
$host		= "localhost"; // Use Local Host Only      
$username	= "id6018893_bulishtrade";
$password	= "DennisS310334727"; 
$db_name	= "id6018893_bulish_trade_data"; 


$link = mysqli_connect($host, $username, $password, $db_name);
 
if (!$link) {
 echo "Connection Error". PHP_EOL;
 echo "Error Code: ". mysqli_connect_errno().PHP_EOL;
 echo "Error: Description".mysqli_connect_error().PHP_EOL;
 exit;
}
echo "Connection to 000webhost Successfull";
echo "<br>";

?>
