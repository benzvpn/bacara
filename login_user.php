<?php
include('./env/config.php');
error_reporting(0);
session_start();
//0 = รอ
//1 = ผ่าน
//2 = ไม่ผ่าน
    // try
    // {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $login_facebook = $_POST['login_facebook'];


        if($login_facebook=="true"){

            $query = "SELECT * FROM member WHERE Username_member =  '$user'";
            $queryresult = mysqli_query($objCon,$query);
            $objResult = mysqli_fetch_array($queryresult,MYSQLI_ASSOC);


              if ($objResult["role"] == "user") {
                        if($objResult["status_approve"] == 0) {
                          echo "<h1>โปรดยืนยันตัวตน</h1>";
                          header("Refresh:2; https://underfox.xyz/ufabet/");
                        } else if($objResult["status_approve"] == 1) {
                          
                          $_SESSION['end_date'] = $objResult["end_date"];
                          $_SESSION['start_date'] = $objResult["start_date"];
                          $_SESSION['credit'] = $objResult["credit"];
                          $_SESSION["username"] = $objResult["nickname"];
                          $_SESSION["id_member"] = $objResult["id_member"];
                          $_SESSION["nickname"] = $objResult["nickname"];
                          $_SESSION["profile_img"] = $objResult["profile_img"];
                          $_SESSION["line_img"] = $objResult["line_img"];

                          // echo "<h1>ยินดีต้อนรับเข้าสู่ระบบ</h1>";
                          header("Refresh:2; index.php");
                        } else {
                          echo "<h1>โปรดตรวจสอบสิทธ์ของคุณ</h1>";
                          header("Refresh:2; https://underfox.xyz/ufabet/");
                        }

                      } else {

                      }



        }else{

            $query = "SELECT * FROM member WHERE Username_member =  '$user'";
            $queryresult = mysqli_query($objCon,$query);
            $objResult = mysqli_fetch_array($queryresult,MYSQLI_ASSOC);

            if (password_verify($pass.$objResult['salt_password'], $objResult['Password_member'])){

              if ($objResult["role"] == "user") {
                        if($objResult["status_approve"] == 0) {
                          echo "<h1>โปรดยืนยันตัวตน</h1>";
                          header("Refresh:2; https://underfox.xyz/ufabet/");
                        } else if($objResult["status_approve"] == 1) {
                          $_SESSION['end_date'] = $objResult["end_date"];
                          $_SESSION['start_date'] = $objResult["start_date"];
                          $_SESSION['credit'] = $objResult["credit"];
                          $_SESSION["username"] = $objResult["Username_member"];
                          $_SESSION["id_member"] = $objResult["id_member"];
                          $_SESSION["nickname"] = $objResult["nickname"];
                          $_SESSION["profile_img"] = $objResult["profile_img"];
                          $_SESSION["line_img"] = $objResult["line_img"];

                          // echo "<h1>ยินดีต้อนรับเข้าสู่ระบบ</h1>";
                          header("Location: index.php");
                        } else {
                          echo "<h1>โปรดตรวจสอบสิทธ์ของคุณ</h1>";
                          header("Refresh:2; https://underfox.xyz/ufabet/");
                        }

                      } else {

                      }
              } else {
                header("Refresh:1; index.php");
                echo '<script type="text/javascript">';
                echo 'alert("username หรือ password ไม่ถูกต้อง");';
                echo '</script>';
              }

        }








        // $strSQL = "SELECT * FROM member WHERE Username_member =  '$user' and Password_member = '$pass'";
        // $objQuery = mysqli_query($objCon,$strSQL);
        // $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

        // if(!$objResult) {
        //   header("Refresh:1; index.php");
        //   echo '<script type="text/javascript">';
        //   echo 'alert("username หรือ password ไม่ถูกต้อง");';
        //   echo '</script>';

        // }
    //     else
    //     {




    //       if($objResult["role"] == "user")
    //       {
    //         if($objResult["status_approve"] == 0)
    //         {
    //           echo '<script type="text/javascript">';
    //           echo 'alert("User รอการอุนมัติ");';
    //           echo '</script>';

    //               header("location:index.php");

    //         }
    //         if($objResult["status_approve"] == 1)
    //         {
    //           // if($objResult["end_date"] <= date("Y-m-d"))
    //           // {
    //           //   echo '<script type="text/javascript">';
    //           //   echo 'alert("ไม่สามารถเข้าสู่ระบบได้ กรุณาเติม Credit");';
    //           //   echo '</script>';

    //           //       header("location:index.php");

    //           // }
    //           // else
    //           // {

    //           // }
              // $_SESSION['end_date'] = $objResult["end_date"];
              //   $_SESSION['start_date'] = $objResult["start_date"];
              //   $_SESSION['credit'] = $objResult["credit"];
              //   $_SESSION["username"] = $objResult["Username_member"];
              //   $_SESSION["id_member"] = $objResult["id_member"];

              //   header("location:index.php");
    //         }
    //         if($objResult["status_approve"] == 2)
    //         {
    //           echo '<script type="text/javascript">';
    //           echo 'alert("User ไม่ผ่านการอนุมัติ");';
    //           echo '</script>';

    //           header("location:index.php");
    //         }

    //       }else{
    //         header("location:index.php");
    //       }


    //     }

    // }
    // catch(Exception $e)
    // {
    //   echo $e->getmessage();
    // }
    // finally
    // {
    //     if($con != null)
    //     {
    //         mysqli_close($objCon);
    //     }
    // }
  //<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
?>
