<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/tn.jpeg">

    <title>Contact</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <style>
      
input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.f1{
    border-radius: 5px;
    /* background-color: #f2f2f2; */
    background-image: background: -webkit-linear-gradient(right, #e6f3ff, #80c1ff);
    background-image: background: -o-linear-gradient(right, #e6f3ff, #80c1ff);
    background-image: background: linear-gradient(to left, #e6f3ff, #80c1ff);
   padding: 20px;
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

         <div class="f1"><br> 
         <br><h3>Incase of any issues Feel free to contact us</h3>
         
  <form action="">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Email">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <a class="btn btn-lg btn-primary" role="button">Submit &raquo;</a>
</form>
</div> <!--/container ends -->
       

<!-- ====================Description===================== -->
      
      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">DjDecoders</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center></div>
      <style >
         
.navbar{
   background: linear-gradient(to left,#e6f3ff,#80c1ff);
  box-shadow: 2px 2px 4px black;
}
        #footer{
          background: linear-gradient(to right,#e6f3ff,#80c1ff);
          width:100% ;
          padding: 10px; 
          box-shadow: 2px 2px 4px black;

        }
        </style>
    </div> <!--/container ends -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>