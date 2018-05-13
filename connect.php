<?php

	define('DB_HOST','127.0.0.1');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','unsm1482_unbk');

	$db_conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	if(mysqli_connect_errno()){
		echo 'Gagal Tersambung : '.mysqli_connect_error();
		exit();
	}
?>