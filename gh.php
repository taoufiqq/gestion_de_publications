<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operations();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud Operation in Php Using OOP</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Signup Form </h2>
                    </div>
                    <?php 



                  if(isset($_POST['btn_save']))
            {
                $user = ($_POST['username']);
                $eml = ($_POST['email']);
                $pass = ($_POST['password']);
                echo "$user";

                $db->set_insert($user,$eml,$pass);
                 $db->get_insert();
                
         
                     }

                         ?> 


                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="username" placeholder=" First Name" class="form-control mb-2" required>
                                <input type="text" name="email" placeholder=" Last Name" class="form-control mb-2" required>
                                <input type="text" name="password" placeholder=" User Name" class="form-control mb-2" required>
                                
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save" type="submit"> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>