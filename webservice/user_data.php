<?php
   include('../env/config.php');
   $id = $_GET['id'];
try
   {
        $sql = "SELECT * FROM member Where Username_member= '$id' LIMIT 1";
        $result = mysqli_query($objCon,$sql);
        $row = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        echo json_encode($rows,true);
    }
   catch(Exception $e)
    {
        echo $e->getmessage();
    }
   finally
    {
        if($objCon != null)
        {
            mysqli_close($objCon);
        }
    }

?>
