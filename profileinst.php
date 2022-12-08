<?php
session_start(); 
if(isset($_SESSION['instId']))
{
	$tutorId = $_SESSION['instId'];
	$tname=$_SESSION['instName'];
?>

<html>

<head>
  <link rel="stylesheet" href="style.css" type="text/css">
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
                    <li class="nav-item"><a class="nav-link" style="color: white" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

  <div class="container mt-3">
    <h2> <?php echo $tname; ?> Profile </h2>

<?php
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);




if (isset($_POST['updateProfile']))
{
$tname = $_POST['tname'];
$tphone = $_POST['tphone'];
$taddress = $_POST['taddress'];
$tcountry = $_POST['instCountry'];
$instPostcode = $_POST['instPostcode'];

$type = $_POST['type'];
$tcity = $_POST['tcity'];


if( $tname != "" && $tphone != "" && $taddress!="" && $tcountry!="" && $type!="" )
{
    
$q = "update educationinstitution set instName = '$tname', instPhone = '$tphone', instAddress= '$taddress',instPostcode='$instPostcode' ,
 instCountry= '$tcountry', instCity='$tcity', instType='$type' where instID= '$tutorId' ";

$r = $conn->query($q); 
if (!$r) 
    die ($conn->error); 
else 
  echo '<script>alert ("The profile is updated.")</script>' ;
   
}
else 
	echo '<script>alert ("Field cannot be empty")</script>' ; 

  
}

$query = "SELECT * from  educationinstitution where instID='$tutorId' " ; 
$result = $conn -> query($query);
 if (!$result) die ($conn->error);
   $rows = $result-> num_rows; 
   
$row = $result -> fetch_array(MYSQLI_BOTH); 





?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
	<form method="post" action="profileinst.php">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
			<img class="rounded-circle mt-5" width="150px" src="img/<?php echo $row['instImage']?>">
			<br>
			<span class="text-black-50"> <?php echo $row['instEmail']?></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-left">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    
					<div class="col-md-12"><label class="labels">Name</label>
					<input type="text" class="form-control" placeholder="first name" 
					value="<?php echo $row['instName'];?>" name="tname"></div>
                  
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label>
					<input type="text" class="form-control" name="tphone" value="<?php echo $row['instPhone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label>
					<input type="text" class="form-control" placeholder="enter address line " name="taddress" value="<?php echo $row['instAddress']; ?>"></div>
                
                    <div class="col-md-12"><label class="labels">Type</label>
				
                    <select class="form-control" name="type">
					<option value="University" checked>University</option>
					<option value="Institution">Institution</option>
					</select>
					</div>
					
					<div class="col-md-12"><label class="labels">Post Code</label>
					 <input type="text" class="form-control" id="code"  name="instPostcode" value="<?php echo $row['instPostcode']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Country</label>
					<input type="text" class="form-control" placeholder="country" name="instCountry"value="<?php echo $row['instCountry']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">City</label>
					<input type="text" class="form-control" placeholder="city" name="tcity" value="<?php echo $row['instCity']; ?>"></div>
                     </div>
                <div class="mt-5 text-center">
				<input class="btn btn-primary profile-button" name="updateProfile" type="submit" value="Save Profile"></div>
            </div>
        </div>
        
		</form>
    </div>
</div>
 
</div>
<?php
?>

  
</body>





  
</html>
<?php
 }
 else
 print("Please login to enable accessing the page");
 ?>
