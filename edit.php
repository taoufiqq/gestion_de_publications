<!doctype html>


  <?php
  session_start();

           require_once('./config/dbconfig.php'); 
    $db = new operations();
 
      if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

     $db->set_recordupadate($ID);
    $resulte = $db->get_recordupadate();

                              
    }


                 
          
            if (isset($_SESSION['user'])) {
             
           
              ?>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Myprofile</title>
   <script src="https://kit.fontawesome.com/f87defdbca.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- Favicons -->
  <link rel="stylesheet" href="styles/home.css">
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
      <a class="navbar-brand" href="#">BigAds</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
          
          		<a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>

          
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Contact us <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <div class="form-inline mt-2 mt-md-0">
          <div class="row100 d-flex">
            <div class="mr-2">
                <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
           
            </div>
           
          </div>
        </div>

      </div>
      </div>
    </nav>
  </header>



    <section class="section">
        <div class="container-fluid">
            <div class="container">
                <div class="formBox">
                                  <?php
                                    
             if(isset($_POST["btn_up"]) && !empty($_POST["btn_up"])){
    
                $im = ($_POST['image']);
                   $des = ($_POST['description']);
                  $dat = ($_POST['dates']);
                   $cat = ($_POST['category']);
                  $tit = ($_POST['title']);
                  $user= $_SESSION['id'];
                 $pub=$ID;

                  
                $db->set_update($im,$des,$dat,$cat,$user,$tit,$pub);
               
                $db->get_update();

                
                
                 header('Location: profile.php');
             exit();
             
         
                              
                } 


                              ?>              
                    <form action="" method="POST" >
                        <div class="row1">
                            <div class="col-xl-12">

                    
                        
      
                                <h1>update Publication</h1>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                     
                        <input type="file" name="image" class="input" value="<?php echo $resulte[0][1];?>"  >
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Title</div>
                                        <input type="text" name="title" class="input" value="<?php echo $resulte[0][6];  ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Category</div>
                                        <input type="text" name="category" class="input" 
                                        value="<?php echo $resulte[0][4]   ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Date</div>
                                        <input type="date" name="dates" class="input" value="<?php echo $resulte[0][3] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Description</div>
                                        <textarea class="input" name="description"><?php echo $resulte[0][2]?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row1">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <input type="submit" value="Update Ad"  name="btn_up"   class="butt">
                                  

 
                      


                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

   
        <?php
          }else{

            header('Location:login.php');
            exit();
          }


        ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $("input").focus(function () {
            $(this).parent().addClass("focus")
        })

    </script>
</body>

</html>
