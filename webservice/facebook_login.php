<?php
include('../env/config.php');
error_reporting(0);
session_start();



  $username = $_GET['id'];

  $strSQL = "SELECT * FROM member WHERE Username_member =  '$username'";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

  if(!$objResult){

    // ยังไม่เคยสมัครด้วย facebook
        echo 0;
  } else {

    // เคยสมัครด้วย facebook login ได้เลย
        echo 1;

    }

      mysqli_close($objCon);

?>
