<?php
session_start(0);
mysql_connect("localhost","root","devansh");
$d=mysql_select_db("digi");
if(!$d)
    echo("Couldn't Connect");

if (isset($_SESSION['name']))//already loggedin
{
     $name = $_SESSION['name'];

if(isset($_POST['btn-upload']))
{    
     
	$file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	//$file_time = $_FILES['file']['time'];
	$folder="uploads/";
	
	$new_size = $file_size/1024;  // new file size in KB
	$new_file_name = strtolower($file);// make file name in lower case
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		/*$sql="INSERT INTO files(file,type,size) VALUES('$final_file','$file_type','$new_size')";*/
		$sql="INSERT INTO files(file,type,size,name) VALUES('$final_file','$file_type','$new_size','$name')";
		$q=mysql_query($sql);
		if(!$q)
			echo "COuldnt add to database";
		else
			echo "Success";

		?>

		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='upload.php?fail';
        </script>
		<?php
	}
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/tn.jpeg">

    <title>Upload File</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
            <li class="active"><a href="upload.php">Upload</a></li>
            <li ><a href="view.php">View</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div id="body" ><center><br><br><br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" /><br>
	<button type="submit" name="btn-upload" >upload</button>
	</form>
	</center>
</div>
<div id="footer">
<label>By <a href="">DjDecoders</a></label>
</div>

</body>
</html>