<?php
include('./env/config.php');


	$id_member = $_POST['id'];

  $strSQL = "SELECT * FROM member WHERE id_member =  '$id_member'";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	$update_credit = $objResult["credit"];
	echo $update_credit;
  mysqli_close($objCon);

?>
