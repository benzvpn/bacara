<?php  
include('./env/config.php');

if(isset($_POST['username'])){
    $username  = $objCon->real_escape_string($_POST["username"]);
    $query = "SELECT Username_member FROM member WHERE Username_member  = '$username'";
    $queryresult = mysqli_query($objCon,$query);
    $numrows = mysqli_num_rows($queryresult);

    if($numrows > 0){
    			echo 'notpass';

    }else{
    			echo 'pass';

    }

}

?>