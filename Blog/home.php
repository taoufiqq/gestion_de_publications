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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <!-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c"> -->
    <link rel="stylesheet" href="home.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
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
                    <button class="button btn1">Log out</button>

                </form>
            </div>
        </nav>
    </header>


    <section class="section">
        <div class="container-fluid">
            <div class="container">
                <div class="formBox">
                    <form>
                        <div class="row1">
                            <div class="col-xl-12">
                                <h1>ADD Publication</h1>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">

                                        <input type="file" name="" class="input">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Title</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Category</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Date</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Description</div>
                                        <textarea class="input"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row1">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <input type="submit" value="Send Pub" class="butt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section1">
        <div class="container-fluid">
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
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium veniam
                                    provident enim ullam, nesciunt ut!</p>
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
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium veniam
                                    provident enim ullam, nesciunt ut!</p>
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
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium veniam
                                    provident enim ullam, nesciunt ut!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $("input").focus(function () {
            $(this).parent().addClass("focus")
        })

    </script>
</body>

</html>
