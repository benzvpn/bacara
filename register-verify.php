<?php
include('./env/config.php');
	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once 'PHPMailer/PHPMailer.php';
	include_once 'PHPMailer/Exception.php';
	include_once 'PHPMailer/SMTP.php';
	if(isset($_POST['submit'])) {

		// $con = new mysqli('35.240.131.230', 'sa', 'jGLnCLYKMXUNJ6p1', 'bacara_db');
		$facebook = $objCon->real_escape_string($_POST['facebook']);
		$facebook_picture = $objCon->real_escape_string($_POST['facebook_picture']);
		$username = $objCon->real_escape_string($_POST['username']);
		$email = $objCon->real_escape_string($_POST['email']);
		$password = $objCon->real_escape_string($_POST['password']);
		$cPassword = $objCon->real_escape_string($_POST['cPassword']);
		$phonenumber = $objCon->real_escape_string($_POST['phonenumber']);
		$lineid = $objCon->real_escape_string($_POST['lineid']);
		$nickname = $objCon->real_escape_string($_POST['nickname']);


		if ($username == "" || $email == "" || $password != $cPassword) {
			$msg = "Please check your inputs";
		}else {

			$query = "SELECT id_member FROM member WHERE email='$email'";
			$queryresult = mysqli_query($objCon,$query);
			$num_rows = mysqli_num_rows($queryresult);
			if ($num_rows > 0) {
				echo "มีผู้ใช้งานอีเมล์นี้ ในระบบแล้ว กรุณาตรวจสอบ";
				header("Refresh:3; index.php");
			} else {
				
				$token = "qwertyuiopasdfghjklQWERTYUIOPASDFGHJKL0123456789";
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);

				$salt = "asdfghjklASDFGHJKL0123456789!@#$%^&*()_+";
				$salt = str_shuffle($salt);
				$salt = substr($salt, 0, 10);


				$hashedPassword = password_hash($password.$salt, PASSWORD_BCRYPT);

				if($facebook=="true"){


			




								$query ="INSERT INTO member (Username_member, Password_member, credit, phone_member, line, status_approve, role, start_date, end_date, ref, date_remain, profile_img, line_img, 	nickname, 	email, verify_token, salt_password) VALUES ('$username', '$hashedPassword' , '0', '$phonenumber', '', '1', 'user', '', '', '', '', '$facebook_picture', '', '$nickname', '$email', '$token', '$salt')";
								if ($queryresult = mysqli_query($objCon,$query)) {

									echo "<script>alert('register successfully');document.location='index.php'</script>";
										
								} else {

								


								}



				}else{




						$query ="INSERT INTO member (Username_member, Password_member, credit, phone_member, line, status_approve, role, start_date, end_date, ref, date_remain, profile_img, line_img, 	nickname, 	email, verify_token, salt_password) VALUES ('$username', '$hashedPassword' , '0', '$phonenumber', '', '0', 'user', '', '', '', '', '', '', '$name', '$email', '$token', '$salt')";
							if ($queryresult = mysqli_query($objCon,$query)) {
								$mail = new PHPMailer();

								$mail->Host = "smtp.gmail.com";
								$mail->isSMTP();
								$mail->SMTPAuth = true;
								$mail->Username = "sluxterz123@gmail.com"; 
								$mail->Password = "0885858419S";
								$mail->SMTPSecure = "ssl";
								$mail->Port = 465;

								$mail->setFrom('uefabet@noreply.com');
								$mail->addAddress($email, $username);
								$mail->Subject = "verify email";
								$mail->isHTML(true);
								$mail->Body = "
									<div class=\"block-confirm\" style=\"width:320px; margin: 0 auto;text-align: center;background-color: #f5f5f5;box-shadow: 0px 0px 6px 0px rgba(192,192,192,0.8);padding: 20px 10px;\">
										<img src=\"https://underfox.xyz/ufabet/testphpmail/images/logo-de6d8af1.png\" width=\"320\" height=\"auto\" alt=\"\" style=\"margin-bottom: 20px;\">
										<div class=\"title\" style=\"font-weight: 700;margin-bottom: 30px;\">กรุณากดปุ่มยืนยันอีเมล์ เพื่อเข้าสู่ระบบ</div>
										<div class=\"content\">
											<a style=\"text-decoration: none; color: #fff;background-color: #15AAF5; font-weight: 700;font-size: 18px;padding: 10px 20px 10px 20px; border-radius: 3px;\"href='https://underfox.xyz/ufabet/confirm.php?email=$email&token=$token'>ยืนยันอีเมล์</a>
										</div>
									</div>
								";
								if ($mail->send()) {
									$msg = "<h3>email send success!!</h3>";
									echo "<h1>โปรดยืนยัน อีเมล์</h1>";
									header("Refresh:2; https://underfox.xyz/ufabet/");
								}else {
									$msg = "email not send please check your data!";
									echo $mail->ErrorInfo;
								}
							} else {



							}



				}
		
				

			}
		}
	}




?>

