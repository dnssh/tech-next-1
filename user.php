<?php

 session_start(0);
//$name=$_SESSION['name'];
$row=$_SESSION['row'];
$name=$row['name'];

echo'<center><h3>User Profile</h3>';
echo '<br><h2>Welcome  '.$name.'</h2>';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/tn.jpeg">

    <title>User Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
        .navbar{
        background: linear-gradient(to left,#e6f3ff,#80c1ff);
        box-shadow: 2px 2px 4px black;
        }    img{width: 150px;
        height: 150px;

        }
        #footer{
        background: linear-gradient(to right,#e6f3ff,#80c1ff);
        /* background: linear-gradient(to right,#ffffff,#737373); */
        width:100% ;
        padding: 10px; 
        box-shadow: 2px 2px 4px black;

        }
        .img {
        border: 1px solid #ddd; /* Gray border */
        border-radius: 4px;  /* Rounded border */
        padding: 5px; /* Some padding */
        width: 150px;/* Set a small width */
        }

        /* Add a hover effect (blue shadow) */
        img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 1);
        }
        .card {
        background: linear-gradient(to right,#e6f3ff,#80c1ff);
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
        transition: 0.3s;
        width: 300px;
        margin-bottom: 50px;
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
            <li ><a href="user.php">User</a></li>
            <li ><a href="upload.php">Upload</a></li>
            <li ><a href="view.php">View</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <center>
        <div class="card">
        <div class="item">
        <center>
        <h3><?php echo "Name:".$row['name'] ?></h3>
        <h4><?php echo '<a target="_blank" href="burj.jpg">
        <img src="burj.jpg" alt="Image">
        </a>'?></h4>
        <h4><?php echo "ID:".$row['id'] ?></h4>
        <h3><?php echo "Name:".$row['name'] ?></h3>
        <h4><?php echo "Email:".$row['email'] ?></h4>
        
        </center>
        </div>
        </div>
    </center>


      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">DjDecoders</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
</div>
</body>
</html>