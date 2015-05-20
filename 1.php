<?php
	
	// Create connection
	$conn = new mysqli("localhost","root","root","pingpong");
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	
	$file = 'logs.txt';

	$date1 = date('Y-m-d H:i:s');
	$message = "starting file 1 ".$date1;

	$f = fopen($file, 'a');
	fwrite($f, $message . PHP_EOL);

//	file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
	
	for ($i=1;$i<=1000;$i++) {
		$sql = "INSERT INTO `pingpong`.`users` ( `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES ('abi', 'abiewardani', 'abiewardani@gmail.com', 'abiewardani@gmail.com', 'active', '12312', '0000-00-00 00:00:00', '0000-00-00 00:00:00');";

	  	if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	

	
	$date2 = date('Y-m-d H:i:s');
	$message = "end file 1 ".$date2;
	fwrite($f, $message . PHP_EOL);
	fclose($f);


?>