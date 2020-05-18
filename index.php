<!doctype html>
<html lang="en">
<?php
 session_start();
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
   
  
 ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Home</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/"> -->

  <!-- Bootstrap core CSS -->
  <!-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
          	<?php
          	// require_once('./config/dbconfig.php');
          
         
          	if (isset($_SESSION['user'])) {
          		echo '<a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>';

          	}
            ?>
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
                <a class="btn btn-outline-primary" style="color:white;border:2px solid white" href="login.php" role="button">Login</a>
           
            </div>
            <div>
              <a class="btn btn-outline-primary" style="color:white;border:2px solid white" href="login.php" role="button">SignUp</a>
            </div>
          </div>
        </div>

      </div>
      </div>
    </nav>
  </header>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgs/header.png" class="d-block w-100" alt="..." height="700">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imgs/header1.png" class="d-block w-100" alt="..." height="700">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imgs/header2.png" class="d-block w-100" alt="..." height="700">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Three columns of text below the carousel -->
  <section class="section1">
    <div class="container-fluid">
      <h2>ALL PUBLICATION</h2>
     
  <section class="section1">
        <div class="container-fluid">
            <div class="container">
                <div class="row">



                 
                           
                           <?php
          
                             if(!empty($result)) { 
                                    foreach($result as $row) {
                                          
                                ?>
 
           
            



                    <div class="col-sm-4">
                        <div class="card">
                            <div class="icone">
                                <a href="#"><i class="far fa-trash-alt"></i></a>

                                <a href="#"><i class="fa fa-edit"></i></i></a>
                            </div>
                            <div class="post-image">
                                <img src="imgs/<?php echo $row['image'] ?>" class="img-responce" width="100%" height="100%">
                            </div>
                            <div class="news-content">
                                <span class="category"><?php echo $row['category'] ?></span>
                                <div class="post-meta">
                                    <span class="author">
                                        <a href="#">
                                            <i class="fa fa-user" aria-hidden="true"></i>Someone Famous
                                        </a>
                                    </span>
                                    <span class="timer">
                                        <a href="#">
                                            <i class="fa fa-clock" aria-hidden="true"></i><?php echo $row['dates'] ?>
                                        </a>
                                    </span>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <h2 class="post-header"><?php echo $row['title'] ?></h2>
                                <p><?php echo $row['description'] ?></p>
                            </div>
                        </div>
                    </div>
                        <?php
          
                             }
                           }
                                          
                                ?>
 
                 
                </div>
            </div>
        </div>
    </section>


  </div>
 </section>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')

  </script>
  <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>
