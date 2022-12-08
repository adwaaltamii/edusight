<?php 
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);
else
{

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

  <div class="container">
<!-- form  --> 
    <h3> User Type: </h3>
      <select class="select" id="ddlist" onchange="changeForm()">

        <option value="1"> ------ </option>
        <option value="2"> Educational institution </option>
        <option value="3">Tutor</option>
      </select>
  
    



    
  <!-- Educational Institution form  -->
  <form id="eduInstitution" method="POST" action="signup.php">
  
  <div class="mb-3 mt-3">
    <label for="name">Educational Institution Name: </label>
    <input type="text" class="form-control" id="tutorname" placeholder="Enter Educational Insitution " name="instname">
  </div>
  <br>
  <div class="mb-3 mt-3">
    <label for="phonenumber">Phone Number:</label>
    <input type="text" class="form-control" id="tutornumber" placeholder="Enter Phone number" name="instnum">
  </div>
  <br>
  <div class="mb-3 mt-3">
    <label for="email">Institution Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Instutution email" name="instemail">
  </div>
  <br>
  <div class="mb-3">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter institution password" name="instpswd">
  </div>
  <br>
  <div class="mb-3">
    <label for="type">Institution Type:</label>
    <select name="insttype" class="form-control" >  
    <option value="university"> University</option>
    <option value="institution"> Institution</option>
    <option value="school"> School </option>
    </select>
  </div>
    <br>


    
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="conditions"> I agree to the Terms and Conditions
    </label>
  </div>



  <input type="Submit" class="btn btn-primary" value="Sign Up" name="addinstitute">
  </form>
  
  
<?php 

if (isset($_POST["addinstitute"]))
{
    $instname = $_POST['instname']; 
    $instphone = $_POST['instnum'];
    $instemail = $_POST['instemail'];
    $instpswd = $_POST['instpswd'];
    $insttype = $_POST['insttype'];

$query = "insert into educationinstitution (instName,instPhone,instEmail,instType,instPwd) values ('$instname','$instphone','$instemail','$insttype','$instpswd')"; 
$result = $conn -> query ($query); 
if (!$result) die ($conn->error);
else 
	echo 'your record has been added successfully'; 

//$result -> close() ; 
$conn -> close () ; 

//$r2 = $conn -> query($insertQ) ; 
//if (!$r2) die('Record not inserted'); 
//else echo ('Record inserted successfully'); 
}

?> 
  
<!--tutor form-->
  <form id="tutor" method="POST" action="signup.php" >
      <div class="mb-3 mt-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="tutorname" placeholder="Enter Name" name="tutname">
      </div>
 <br>
  <div class="mb-3 mt-3">
        <label for="phonenumber">Phone Number:</label>
        <input type="text" class="form-control" id="tutornumber" placeholder="Enter Phone number" name="tutphone">
      </div>
<br>
      <div class="mb-3 mt-3">
        <label for="email">Business Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="temail">
      </div>
<br>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="tpswd">
      </div>
<br>
  
<div class="mb-3 mt-3">
  <p>Gender </p>
 
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="female" checked>
      <label class="form-check-label" for="radio1">Female </label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="optradio" value="male">
      <label class="form-check-label" for="radio2">Male</label>
    </div>
  
</div>

    <div class="mb-3 mt-3">
      <label for="Start Date" class="form-label"> Birthdate:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter Start Date" name="birthDate">
    </div>

  
    <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="conditions"> I agree to the Terms and Conditions
        </label>
      </div>

      
  
 <input type="Submit" class="btn btn-primary" value="Sign Up" name="addtutor">
    </form>
    <?php 

if (isset($_POST["addtutor"]))
{
    $tutname = $_POST['tutname']; 
    $tutphone = $_POST['tutphone'];
    $temail = $_POST['temail'];
    $tpswd = $_POST['tpswd'];
    $optradio = $_POST['optradio'];
    $birthDate = $_POST['birthDate'];
$insertQ = "insert into Tutors(tname,tphone,temail,tpass,tgender,tbirthdate) values ('$tutname','$tutphone','$temail','$tpswd','$optradio','$birthDate')";
$r2 = $conn -> query($insertQ) ; 
if (!$r2) 
	die('Record not inserted'); 
else 
	echo ('Record inserted successfully'); 
}


?> 
  <script>
    document.getElementById("eduInstitution").style.display="none";
      document.getElementById("tutor").style.display="none";

  function changeForm(){
    var selectedForm = document.getElementById("ddlist").value;
    if (selectedForm==2){
       document.getElementById("eduInstitution").style.display="block";
      document.getElementById("tutor").style.display="none";
    }
    else if(selectedForm == 3){
    document.getElementById("tutor").style.display="block";
    document.getElementById("eduInstitution").style.display="none";
    }
    else{
      document.getElementById("eduInstitution").style.display="none";
      document.getElementById("tutor").style.display="none";
    }

  }
  </script>

  </div>
</body>

  
</html>
<?php

}

?>
