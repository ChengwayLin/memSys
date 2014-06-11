<?php

		$mysqli = new mysqli("localhost", "phpFileAccess", "m2ZnrQbrM3ARwMhH", "memSys");
		
		/* check connection */
		if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
		}


?>