<?php 
 define('DB_HOST', 'mysql://mysql-campuslife.alwaysdata.net/');
 define('DB_USER', ‘138846’);
 define('DB_PASS', ‘root’);
 define('DB_NAME', 'campuslife_mabase');
 
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
$stmt = $conn->prepare("SELECT nom, date, image, description FROM evenements;");
 
$stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($nom, $date, $image, $description);
 $events = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp[‘nom’] = $nom; 
 /*$temp[‘date’] = $date; 
 $temp[‘image’] = $image; 
 $temp[‘description’] = $description; */
 array_push($events, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($events);

 ?>
