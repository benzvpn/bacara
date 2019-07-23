<?php
include('./env/config.php');


	$id_member = $_POST['id'];

  $strSQL = "SELECT * FROM member WHERE id_member =  '$id_member'";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	echo $objResult["credit"];

  mysqli_close($objCon);

?>
