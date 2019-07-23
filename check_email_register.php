<?php  
include('./env/config.php');

if(isset($_POST['email'])){
    $email  = $objCon->real_escape_string($_POST["email"]);
    $query = "SELECT email FROM member WHERE email  = '$email'";
    $queryresult = mysqli_query($objCon,$query);
    $numrows = mysqli_num_rows($queryresult);

    if($numrows > 0){
    			echo 'notpass';

    }else{
    			echo 'pass';

    }

}

?>