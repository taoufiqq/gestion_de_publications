<?php 

    require_once('./config/dbconfig.php');

      session_start();
    $db = new operations();
    
                      
                if(isset($_POST['btn_save']))
            {
                $im = ($_POST['image']);
                $des = ($_POST['description']);
                $dat = ($_POST['dates']);
                 $cat = ($_POST['category']);
                 $id = ($_SESSION['id']);
                $tit = ($_POST['title']);
                

                $db->set_insert($im,$des,$dat,$cat,$id,$tit);
                 $db->get_insert();
                
                 header('Location: profile.php');
             exit();
             
         
                     }

           
                
            
                         
    


?>