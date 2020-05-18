<?php


require_once('./config/dbconfig.php');
 
     $usErr =$passErr=$msg="" ;
      $username= $password="";


     if (isset($_POST['register'])) {
      $username = test_inpu(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
      $password =test_inpu(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

      if (empty($username) OR empty($password)) {
          
          echo "please fill input";   

      }else{

     
 $stmt = $db->connection->prepare('SELECT * FROM utilisateur WHERE username= ? ');
    $stmt->execute(array($username));
     $rows = $stmt->rowCount();


    if($rows > 0)
    {
        echo $msg= "is already exist enter another username";
        
    }else{

        
  $stmt = $db->connection->prepare('INSERT INTO utilisateur (username, password) VALUES (?, ?)');
   $ro = $stmt->execute(array($username,$password));
    
 if($ro){

      echo $msg= "sigup is success";
          }

}

    }

}


   








function test_inpu($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}






?>