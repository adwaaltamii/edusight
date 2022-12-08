<?php
ob_start();
session_start();

require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);
?>
<html>
<head>
   <link rel="style" href="style.css" type="text/css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <style>
       .nav-link{
        color: white;
         font-size: larger;
         margin-left:20px;
         margin-right: 20px;
       } 
       nav a:hover{
        color: darkblue;
        background-color: rgb(208, 208, 234);
         text-decoration: none;
       }
       

    </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(13, 13, 77);">
            <div class="container-fluid">
               <a href="index.html" target="_self" class="logo"> <img src="img/logo.png" alt="logo not found" width="100"
            height="100"> </a><!--insert logo here-->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="provide.html"> What we provide?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="eduinst.php">Educational Institutions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tutors.php">Tutors</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Help
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="helpcenter.html">Help Center</a></li>
                      <li><a class="dropdown-item" href="QandA.html">Q&A Forums</a></li>
                      
                    </ul>
                  </li>
                </ul>
                <div class="navbar-right">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" style="color: white" href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up </a></li>
                    <li class="nav-item"><a class="nav-link" style="color: white" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

  <div class="container mt-3">
    <h2> Login </h2>
    <form action="login.php" method="post">
      <h5> User Type: </h5>
      <select id= "type" class="select" name="userType">

        <option value="1"> ------ </option>
        <option value="2"> Educational institution </option>
        <option value="3">Tutor</option>
      </select>
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
      </div>
          
  <input type="Submit" class="btn btn-primary" value="Login" name="login">

  
<?php

if (isset($_POST["login"]))
{
	if($_POST['userType']=="2")
	{
		//session_start();
		$email=$_POST['email'];
		$password = $_POST['pswd'];
		$query = "SELECT * from educationinstitution where instEmail = '$email' and instPwd = '$password' " ; 
$result = $conn -> query($query);
 if (!$result) die ($conn->error);
   $rows = $result-> num_rows; 
   $row = $result -> fetch_array(MYSQLI_BOTH); 
    
    if ($rows > 0 )
    {
		//echo $row[0];
        $_SESSION['instId'] = $row[0] ; 
        $_SESSION['instName'] = $row[1]; 
		header("location:profileinst.php");

	}

   else
			echo "<script>alert('Wrong email or password try again')</script>";

		
	}
	else if($_POST['userType']=="3")
	{
		$email=$_POST['email'];
		$password = $_POST['pswd'];
		$query = "SELECT * from  tutors where temail = '$email' and tpass = '$password' " ; 
$result = $conn -> query($query);
 if (!$result) die ($conn->error);
   $rows = $result-> num_rows; 
    $row = $result -> fetch_array(MYSQLI_BOTH); 
    
    if ($rows > 0 )
    {
		//echo $row[0];
        $_SESSION['tutorId'] = $row[0] ; 
        $_SESSION['tname'] = $row[1];
		echo "Login success";		
	    header("location:profiletutor.php");
	}
   else
			echo "<script>alert('Wrong email or password try again')</script>";

		
	}
	else
		echo "<script>alert('You must select user type to login')</script>";
}
	


?>

    </form>
  </div>

</body>



</html>