<?php 

    require_once('./config/dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];


                 $db->set_delete($ID);
                 $db->get_delete();
             header('Location: profile.php');
             exit();
             
                         
    }


?>