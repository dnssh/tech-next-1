<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/tn.jpeg">

    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">

    <style>
#footer{
          background: -webkit-linear-gradient(left, #e6f3ff, #80c1ff);
          background: -o-linear-gradient(left, #e6f3ff, #80c1ff);
          background: linear-gradient(to right, #e6f3ff, #80c1ff);
          /* background: linear-gradient(to right,#ffffff,#737373); */
          width:100% ;
          padding: 10px; 
          box-shadow: 2px 2px 4px black;

        }
           
.navbar{
   background: -webkit-linear-gradient(right, #e6f3ff, #80c1ff);
   background: -o-linear-gradient(right, #e6f3ff, #80c1ff);
   background: linear-gradient(to left, #e6f3ff, #80c1ff);
  box-shadow: 2px 2px 4px black;
}
        #myCarousel{
           margin-top: 50px;
           box-shadow: 2px 2px 4px black;

        }
        .jumbotron
           {
            background: -webkit-linear-gradient(right, #e6f3ff, #80c1ff);
            background: -o-linear-gradient(right, #e6f3ff, #80c1ff);
            background: linear-gradient(to left, #e6f3ff, #80c1ff);
                       box-shadow: 2px 2px 4px black;
           }   
        #ftext{
          color: black;
        }
img{
    width: 150px;
    height: 150px;
    }
.img {
    border: 1px solid #ddd; 
    border-radius: 4px;  /* Rounded border */
    padding: 5px; /* Some padding */
    width: 150px;/* Set a small width */
}

/* Add a hover effect (blue shadow) */
img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 1);
}


      .card {
        background-color: white;
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
    transition: 0.3s;
    width: 300px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,1.2);
}

/* Add some padding inside the card container */
.item {
    padding: 2px 16px;
    
}       
    </style>
</head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

           <a class="navbar-brand" href="home.php">TechNext.</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="login.php">Student</a></li>
                <li><a href="clogin.php">Admin</a></li>
                </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="register.php">Student</a></li>
                <li><a href="cregister.php">Admin</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
         </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">

       <!-- ======================= Carousel===================== -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="images/tn.jpeg">
              <div class="container">
                <div class="carousel-caption">
                  <h1>TechNext</h1>
                  <p >An Online Locker </p>
                  
                </div>
              </div>
            </div>

            <div class="item">
              <img class="second-slide" src="images/2.jpeg">
              <div class="container">
                <div class="carousel-caption">
                  <h1></h1>
                  <p></p>
                  
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="images/1.jpeg">
              <div class="container">
                <div class="carousel-caption">
                  <h1></h1>
                  <p></p>
                  
                </div>
              </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  <!-- ============Carousel ends================= -->

<!-- ====================Description===================== -->
<div class="jumbotron">

      <center>
        <div class="card">
        <div class="item">
        <center>
        <h1>TechNext</h1>
        <a class="btn btn-lg btn-primary" href="about.php" role="button">Our Team &raquo;</a><br> <br>
        </center>
        </div>
        </div>
        </center>
        <br>
        <h1>
        <p><h2>TechNext is a novel solution for securely storing and sharing offical documents and files for all formats like: jpeg,png, pdfs,and media files, etc.</h2></p>
        <p><h2>TechNext can store user data files privately on cloud server for future access by uploader </h2></p>
        <p><h2>It eradicates the issue of carry one's ORIGINAL DOCUMENTS, since he can access all of the just by one CLICK!</h2></p> 
        </h1>
</div>
      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">DjDecoders</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>
    </div> <!--/container ends -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>
