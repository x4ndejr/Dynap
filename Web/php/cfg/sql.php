
<?php

//Conexão 1 --------------------------------------------------------------------//

$db_host1 = '192.168.0.12'; // Server Name
$db_user1 = 'Dynap'; // Username
$db_pass1 = 'dynap'; // Password
$db_name1 = 'db_warehouse'; // Database Name

$conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
if (!$conn1) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

?>