<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/tn.jpeg">

    <title>Admin Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <style type="text/css">
          #footer{
                 background: -webkit-linear-gradient(left, #e6f3ff, #80c1ff);
                 background: -o-linear-gradient(left, #e6f3ff, #80c1ff);
                 background: linear-gradient(to right, #e6f3ff, #80c1ff);
                 width:100% ;
                 padding: 10px; 
                 box-shadow: 2px 2px 4px black;
                 
                         }       
.navbar{
   background: -webkit-linear-gradient(right, #e6f3ff, #80c1ff);
   background: -o-linear-gradient(right, #e6f3ff, #80c1ff);
   background: linear-gradient(to left, #e6f3ff, #80c1ff);
    box-shadow: 2px 2px 4px black;
}</style>
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
            <li ><a href="home.php">Home</a></li>

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
<!-- =========================== PHP============================ -->
<?php
session_start(1);
mysql_connect("localhost","root","devansh");
$d=mysql_select_db("digi");
if(!$d)
    echo("Couldn't Connect");


if (isset($_SESSION['name']))//already loggedin
    {
        $uname = $_SESSION['name'];
        header('Location: cuser.php');
    }

if(!empty($_POST['email'])&&!empty($_POST['password']))
{
    $count=0;
    $email = $_POST['email'];
    $password =$_POST['password'];
    $sql="SELECT * FROM companies WHERE email='$email' AND password='$password'";
    $q=mysql_query($sql);
    $count=mysql_num_rows($q);
    if($count==1)
    { 
        $row = mysql_fetch_assoc($q);
        $name=$row['name'];
        $_SESSION['name']=$name;
        $_SESSION['row']=$row;
        header('Location: cuser.php');
    }
    
    else
    {die("Incorrect email or Password ");}
}

?>
    
    <div class="container">

      <form class="form-signin" method="post" action="clogin.php">
        <h2 class="form-signin-heading">Admin Login</h2>

        <label for="inputEmail"  class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password"  name="password"id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <center><a href="register.php"><p>Not registered? Register first</p></a></center>
     
      <div id="footer"><center>
      <h3 id="ftext">
      By <a href="about.php">DjDecoders</a></h3>
      <h4 id="ftext"><b>All Rights reserved &copy; 2017 </b></h4></center>
      </div>

    </div> <!-- /container -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
