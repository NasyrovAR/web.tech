<?php
if(!empty($_POST['tek']) || !empty($_POST['kol'])){
	$dbhost = 'localhost';
	$dbuser = 'a0670959_job';
	$dbpass = '123';
	$dbname = 'a0670959_job';
	$dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	if ($dblink->connect_errno) {
		printf("Failed to connect to database");
		exit();
	}
	
	$from = $_POST['tek'];
	$to = $_POST['kol'] + $_POST['tek'];
	
	$result = $dblink->query("SELECT * FROM list LIMIT $from, $to");
	$data = array();
	
	while ( $row = $result->fetch_assoc())  {
		$data[]=$row;
	}
	
	echo json_encode($data);
}
?>