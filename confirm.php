<?php 
	include('./env/config.php');
	function redirect() {
		header('Location: index.php');
	}

	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect();
	}else {
		// $con = new mysqli('35.240.131.230', 'sa', 'jGLnCLYKMXUNJ6p1', 'bacara_db');

		$email = $objCon->real_escape_string($_GET['email']);
		$token = $objCon->real_escape_string($_GET['token']);

		$query = "SELECT id_member FROM member WHERE email='$email'
		AND verify_token='$token' AND status_approve='0'";
		$queryresult = mysqli_query($objCon,$query);
		$num_rows = mysqli_num_rows($queryresult);

		if($num_rows > 0) {
			$query = "UPDATE member SET status_approve='1', verify_token='' WHERE email='$email'";
			$queryresult = mysqli_query($objCon,$query);
			echo "คุณได้ทำการยืนยันตัวตนเรียบร้อยแล้ว สามารถเข้าสู่ระบบได้";
			header("Refresh:2; index.php");
		}else {
			echo "เิดข้อผิดพลาดบางอย่าง กรุณาติดต่อเจ้าหน้าที่";
			header("Refresh:2; index.php");
		}
	}

?>