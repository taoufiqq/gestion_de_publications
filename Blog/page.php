<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Carousel Template · Bootstrap</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/"> -->

  <!-- Bootstrap core CSS -->
  <!-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
      <a class="navbar-brand" href="#">Publication</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact us <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <button class="button btn1">Log in</button>
          <button class="button btn2">Log up</button>
        </form>
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
        <img src="header.png" class="d-block w-100" alt="..." height="700">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="header1.png" class="d-block w-100" alt="..." height="700">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="header2.png" class="d-block w-100" alt="..." height="700">
        <div class="carousel-caption d-none d-md-block">
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
      <div class="container">

        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="post-image">
                <img src="card1.png" class="img-responce" width="100%" height="100%">
              </div>
              <div class="news-content">
                <span class="category">Sport</span>
                <div class="post-meta">
                  <span class="author">
                    <a href="#">
                      <i class="fa fa-user" aria-hidden="true"></i>Someone Famous
                    </a>
                  </span>
                  <span class="timer">
                    <a href="#">
                      <i class="fa fa-clock" aria-hidden="true"></i>Dec 7, 2020
                    </a>
                  </span>
                  <span class="comments pull-right">
                    <a href="#">
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>24
                    </a>
                  </span>
                  <div class="clearfix"></div>
                </div>
                <h2 class="post-header">2018 fifa World Cup Official Theme Song Released</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium veniam provident enim ullam,
                  nesciunt ut!</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card">
              <div class="post-image">
                <img src="card2.png" class="img-responce" width="100%" height="100%">
              </div>
              <div class="news-content">
                <span class="category">Sport</span>
                <div class="post-meta">
                  <span class="author">
                    <a href="#">
                      <i class="fa fa-user" aria-hidden="true"></i>Someone Famous
                    </a>
                  </span>
                  <span class="timer">
                    <a href="#">
                      <i class="fa fa-clock" aria-hidden="true"></i>Dec 7, 2020
                    </a>
                  </span>
                  <span class="comments pull-right">
                    <a href="#">
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>24
                    </a>
                  </span>
                  <div class="clearfix"></div>
                </div>
                <h2 class="post-header">2018 fifa World Cup Official Theme Song Released</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium veniam provident enim ullam,
                  nesciunt ut!</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card">
              <div class="post-image">
                <img src="card3.png" class="img-responce" width="100%">
              </div>
              <div class="news-content">
                <span class="category">Sport</span>
                <div class="post-meta">
                  <span class="author">
                    <a href="#">
                      <i class="fa fa-user" aria-hidden="true"></i>Someone Famous
                    </a>
                  </span>
                  <span class="timer">
                    <a href="#">
                      <i class="fa fa-clock" aria-hidden="true"></i>Dec 7, 2020
                    </a>
                  </span>
                  <span class="comments pull-right">
                    <a href="#">
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>24
                    </a>
                  </span>
                  <div class="clearfix"></div>
                </div>
                <h2 class="post-header">2018 fifa World Cup Official Theme Song Released</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium veniam provident enim ullam,
                  nesciunt ut!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Card Blog  -->
  <div class="container" style="height:120vh">
    <h2>ABOUT US</h2>
    <div class="row">
      <div class="col-xl-12">
        <div class="blog-post">
          <div class="post-img">
            <img src="http://picsum.photos/400/400" alt="" class="img">
          </div>
          <div class="post-info">

            <h1 class="post-title">Standard Deviation</h1>
            <div class="post-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque nostrum optio laborum nisi non
              odit deleniti error ex, minus tempora ducimus delectus. Porro at optio doloribus, provident rem
              voluptatibus.
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class=" blog-post">
          <div class="post-img">
            <img src="http://picsum.photos/400/400" alt="" class="img">
          </div>
          <div class="post-info">

            <h1 class="post-title">Standard Deviation</h1>
            <div class="post-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque nostrum optio laborum nisi non
              odit deleniti error ex, minus tempora ducimus delectus. Porro at optio doloribus, provident rem
              voluptatibus.
            </div>

          </div>
        </div>
      </div>

    </div>


  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')

  </script>
  <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">

  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
