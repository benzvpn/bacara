<?php
session_start();
include ('./env/config.php');

	$id = $_SESSION["id_member"];
	
	$nickname = $objCon->real_escape_string($_POST['nickname']);
	$img_user = $_POST['img_user'];
	$new_img_name = $_SESSION["username"];
	$new_line_name = $_SESSION["username"];
	// $line_user = $_POST['line_user'];

	if (isset($_FILES['img_user'])) {
			// pre_r($_FILES);

			$ext_error = false;	
			$extensions = array('jpg','jpeg','gif','png');
			$file_ext = explode('.', $_FILES['img_user']['name']);
			$file_ext = end($file_ext);
			$new_img_name = $new_img_name.".".$file_ext;

			if(!in_array($file_ext, $extensions)) {
				$ext_error = true;
			}  
			if($ext_error) {
					echo "not up loadfile";
			}else  {
				echo "success images upload";
				echo $new_img_name;

				if ($_SESSION["profile_img"] != "") {
					 $file = 'src/images/userimages/'.$_SESSION["profile_img"];
					 unlink($file);
				}
				move_uploaded_file($_FILES['img_user']['tmp_name'], 'src/images/userimages/'.$new_img_name);
				
				$sql = "UPDATE member SET profile_img = '$new_img_name' WHERE id_member ='$id'";
				$query = mysqli_query($objCon, $sql);

				$strSQL = "SELECT * FROM member WHERE id_member = '$id'";
			  $objQuery = mysqli_query($objCon,$strSQL);
			  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
			  $_SESSION["profile_img"] = $objResult["profile_img"];
			}

			
	} 
	if (isset($_FILES['line_user'])) {
			// pre_r($_FILES);

			$ext_error = false;	
			$extensions = array('jpg','jpeg','gif','png');
			$file_ext = explode('.', $_FILES['line_user']['name']);
			$file_ext = end($file_ext);
			$new_line_name = $new_line_name."line.".$file_ext;

			if(!in_array($file_ext, $extensions)) {
				$ext_error = true;
			}  
			if($ext_error) {
					echo "not up loadfile";
			}else  {
				echo "success images upload";
				echo $new_line_name;

				if ($_SESSION["line_user"] != "") {
					 $file = 'src/images/userline/'.$_SESSION["line_img"];
					 unlink($file);
				}
				move_uploaded_file($_FILES['line_user']['tmp_name'], 'src/images/userline/'.$new_line_name);
				
				$sql = "UPDATE member SET line_img = '$new_line_name' WHERE id_member ='$id'";
				$query = mysqli_query($objCon, $sql);

				$strSQL = "SELECT * FROM member WHERE id_member = '$id'";
			  $objQuery = mysqli_query($objCon,$strSQL);
			  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
			  $_SESSION["line_img"] = $objResult["line_img"];
			}

			
	} 
	// function pre_r($array) {
	// 	echo '<pre>';
	// 	print_r($array);
	// 	echo '</pre>';
	// }

	if (isset($nickname)) {
		if ($nickname != "") {
			$sql = "UPDATE member SET nickname = '$nickname' WHERE id_member ='$id'";
			$query = mysqli_query($objCon, $sql);
		  $strSQL = "SELECT * FROM member WHERE id_member = '$id'";
		  $objQuery = mysqli_query($objCon,$strSQL);
		  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

			$_SESSION["nickname"] = $objResult["nickname"];
		}
		
	}
	
	




	header("Location: index.php");

?>