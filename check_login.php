<?php
include('./env/config.php');


	$username = $_POST['username'];
	$password = $_POST['password'];

	$strSQL = "SELECT * FROM member WHERE Username_member =  '$username' and Password_member = '$password'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	if(!$objResult){

        echo 0;

	}	else {

        echo 1;

		}

			mysqli_close($objCon);

?>
