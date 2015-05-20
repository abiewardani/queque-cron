<?php
	$con=mysqli_connect("localhost","root","root","pingpong");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$file = 'logs.txt';

	$date1 = date('Y-m-d H:i:s');
	$message = "starting file 3 ".$date1;

	$f = fopen($file, 'a');
	fwrite($f, $message . PHP_EOL);

//	file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
	
	for ($i=1;$i<=1000;$i++) {
		
	  	mysqli_query($con,"INSERT INTO `pingpong`.`users` (`id`, `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'abi', 'abiewardani', 'abiewardani@gmail.com', 'abiewardani@gmail.com', 'active', '12312', '0000-00-00 00:00:00', '0000-00-00 00:00:00');");
	}
	

	mysqli_close($con);
	$date2 = date('Y-m-d H:i:s');
	$message = "end file 3 ".$date2;
	fwrite($f, $message . PHP_EOL);
	fclose($f);


?>