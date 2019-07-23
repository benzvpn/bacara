<?php
include('./env/config.php');


	$id_member = $_POST['id'];

  $strSQL = "SELECT * FROM member WHERE id_member =  '$id_member'";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
  $new_credit =  $objResult["credit"]-1;

  if ($new_credit <= 0) {
    $new_credit = 0;
  }


  $sql = "UPDATE member SET credit='$new_credit' WHERE id_member='$id_member'";

  if ($objCon->query($sql) === TRUE) {
    echo $new_credit;

  } else {

  }


  mysqli_close($objCon);



	// $password = $_POST['password'];
  //
	// $strSQL = "SELECT * FROM member WHERE Username_member =  '$username' and Password_member = '$password'";
	// $objQuery = mysqli_query($objCon,$strSQL);
  // $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
  //
	// 		if(!$objResult){
  //
  //           echo 0;
  //
	// 		}	else {
  //
  //           echo 1;
  //
	// 			}
  //
	// 				mysqli_close($objCon);

?>
