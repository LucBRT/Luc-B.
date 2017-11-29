<?php 
 

/* Database config */
$db_host		= 'mysql-campuslife.alwaysdata.net ';
$db_user		= '138846';
$db_pass		= 'root';
$db_database	= 'campuslife_mabase'; 
/* End config */

/*
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
