<?php


	include 'include/db_connect.php';

	echo "you tried to registor";

	// foreach ($_POST as $key => $value) {
	// echo "<p>".$key.':'.$value."</p>";
	// }

	$accountInput = $_POST['mail'];


        if ($result = $mysqli->query("SELECT * FROM member WHERE account ='$accountInput'")) {
                
        		if ($result->num_rows == 0) {
					echo "<br/>account avialable";
						if (comparePassword($_POST['password'],$_POST['confirmed_password'] )) {
							echo "<br/>password equal";
						}else{
							echo "<br/>passwords are not matched";
						}

        		}else{
        			echo "<br/>account alredy taken";   
        		}

        }







        // if ($result = $mysqli->query("SELECT * FROM member WHERE account ='$accountInput'")) {
        //         while ($assoc = $result->fetch_assoc()){
        //                 foreach ($assoc as $key => $value) {
        //                 echo "<p>".$key.':'.$value."</p>";
        //                 }
        //         }
        // }








	// writeMsg();


	// if ($result = $mysqli->query("SELECT * FROM `testTable`")) {
	// 	while ($assoc = $result->fetch_assoc()){
	// 		foreach ($assoc as $key => $value) {
	// 		echo "<p>".$key.':'.$value."</p>";
	// 		}
	// 	}
	// }





	function comparePassword($pass,$c_pass) {

		if ($pass == $c_pass) {
			return true;
		}else{
			return false;
		}
	  
	}



?>