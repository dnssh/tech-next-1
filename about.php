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
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="navbar-fixed-top.css" rel="stylesheet">
     <style>
  
    img{width: 150px;
        height: 150px;

    }
.img {
    border: 1px solid #ddd; /* Gray border */
    border-radius: 4px;  /* Rounded border */
    padding: 5px; /* Some padding */
    width: 150px;/* Set a small width */
}
a.ic{
  font-size: 25px;
}
/* Add a hover effect (blue shadow) */
img:hover {
    box-shadow: 0 0 2px 1px rgba(0,0, 0, 0.9);
}
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
    transition: 0.3s;
    width: 300px;

    background: linear-gradient(to right,#e6f3ff,#80c1ff);
        
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

/* Add some padding inside the card container */
.item {
    padding: 2px 16px;
    
} 
.jumbotron
{
 background: linear-gradient(to left,#e6f3ff,#80c1ff);
box-shadow: 2px 2px 4px black;
}    
.navbar{
   background: linear-gradient(to left,#e6f3ff,#80c1ff);
  box-shadow: 2px 2px 4px black;
}
label{
  user-select: none;
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
            <li><a href="home.php">Home</a></li>

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


      <div class="jumbotron">

      <center>
        <div class="card">
        <div class="item">
        <center>
        <h1>TechNext</h1>
        <img src="images/tn.jpeg" >
        <h2>Team DjDecoders</h2>
        </center>
        </div>
        </div><br><br>

        <div class="card">
        <div class="item">
        <center>
        <h2><strong>Vishal Jain</strong></h2>
        <h2><strong>DJ Sanghvi</strong></h2><br>
        <a  class="ic" href="#"><i class="fa fa-twitter"></i></a>
        <a class="ic" href="#"><i class="fa fa-linkedin"></i></a>
        <a class="ic" href="#"><i class="fa fa-facebook"></i></a>
        
        </center>
        </div>
        </div><br>

        <div class="card">
        <div class="item">
        <center>
        <h2><label>Devansh Shah</label></h2>
        <h2><strong>DJ Sanghvi</strong></h2><br>
        <a class="ic" href="#"><i class="fa fa-twitter"></i></a>
        <a class="ic" href="#"><i class="fa fa-linkedin"></i></a>
        <a class="ic" href="#"><i class="fa fa-facebook"></i></a>
        
        </center>
        </div>
        </div><br>

        <div class="card">
        <div class="item">
        <center>
        <h2><label>Sadia Siddiqui</label></h2>
        <h2><strong>DJ Sanghvi</strong></h2><br>
        <a class="ic" href="#"><i class="fa fa-twitter"></i></a>
        <a class="ic" href="#"><i class="fa fa-linkedin"></i></a>
        <a class="ic" href="#"><i class="fa fa-facebook"></i></a>
        
        </center>
        </div>
        </div>
        </center>
      </div>

      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">DjDecoders</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>
      <style >
        #footer{
          background: linear-gradient(to right,#e6f3ff,#80c1ff);
          /* background: linear-gradient(to right,#ffffff,#737373); */
          width:100% ;
          padding: 10px; 
          box-shadow: 2px 2px 4px black;

        }
        </style>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>
