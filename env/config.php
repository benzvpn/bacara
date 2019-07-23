<?php

try
{
    $servername = "35.240.131.230";
    $username = "sa";
    $password = "jGLnCLYKMXUNJ6p1";
    // $username = "root";
    // $password = "";
    $dbname = "bacara_db";

    $objCon = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_select_db($objCon,$dbname);
}
catch(Exception $e)
{
    echo $e->getmessage();
}
?>
