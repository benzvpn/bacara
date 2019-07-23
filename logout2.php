<?php

    // session_start();
    // //remove PHPSESSID from browser
    // if ( isset( $_COOKIE[session_name()] ) )
    // setcookie( session_name(), "", time()-3600, "/" );
    // //clear session from globals
    // $_SESSION = array();
    // //clear session from disk
    // echo session_destroy() ? "Successfully Logged Out" :  "An error Occurred";
    // header( "location:index.php" );
    // die();

    session_start();
    unset($_SESSION['username']);
    session_destroy();

    header("Location: index.php");
    exit;

?>