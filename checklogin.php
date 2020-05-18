<?php

    require_once('./config/dbconfig.php');
    
      session_start();

     
     if (isset($_POST['login'])) {
     
       $username=test_input(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
       $password = test_input(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

       if (empty($username) OR empty($username )) {
        echo "empty please fill input";
       }else{


            $stmt = $db->connection->prepare("SELECT * FROM utilisateur WHERE username = ? AND password = ? ");
    $stmt->execute(array($username, $password));
    $row = $stmt->fetch();
    $rows = $stmt->rowCount();
     if($rows== 0){

        echo "is not found";
        
      }
      

      if ($rows > 0 ) {
        $id = $row['user_id'];
        $_SESSION['id'] = $id;
        $_SESSION['user'] = $username;
        header('Location: index.php');
        exit();
             
      }








       }

  

   }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





















?>