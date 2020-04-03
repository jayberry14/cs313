<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Maximizing Utility</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/ico" href="https://images-na.ssl-images-amazon.com/images/I/41TVVos4V4L._AC_.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' media='screen' href='Ben.css'>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }
        
        /* Add a gray background color and some padding to the footer */
        footer {
        background-color: #f2f2f2;
        padding: 2vw;
        }
        
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:20vw;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
        display: none; 
        }
    }
    </style>
    </head>
    <body class="bg-8">

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="MaxUtil.php">Maximum Utility Calculator</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <h1>Ben's Economic Calculators</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="https://scitechdaily.com/images/Gravity-Mysteries-Chalkboard.jpg" alt="Lagrangian">
            <div class="carousel-caption">
            <h3>Who Needs Drugs?</h3>
            <p>...no seriously, we have drugs</p>
            </div>      
        </div>

        <div class="item">
            <img src="https://www.economist.com/sites/default/files/images/print-edition/20180428_FND000_0.jpg" alt="MicroEconomics">
            <div class="carousel-caption">
            <h3>Micro Economics is Easy</h3>
            <p>Bet</p>
            </div>      
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="container text-center">    
    <h3>What We Do</h3><br>
    <div class="row">
        <div class="col-sm-4">
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        <p>Current Project</p>
        </div>
        <div class="col-sm-4"> 
        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        <p>Project 2</p>    
        </div>
        <div class="col-sm-4">
        <div class="well">
        <p>Some text..</p>
        </div>
        <div class="well">
        <p>Some text..</p>
        </div>
        </div>
    </div>
    </div><br>

<footer class="container-fluid text-center">
<p>Footer Text</p>
</footer>

</body>
</html>