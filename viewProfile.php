<html>
<head>
  <link rel="style" href="style.css" type="text/css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap/5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
  
  <nav class="navbar navbar-light" style="background-color: #030345;">
    <div class="container-fluid">
      <div class="navbar-header">
               <a href="index.html" target="_self" class="logo"> <img src="img/logo.png" alt="logo not found" width="100"
            height="100"> </a>
      </div>

      <ul class="nav navbar-nav">
        <li><a href="provide.html">What we provide? </a></li>
        <li><a href="eduinst.php">Educational Institutions </a></li>
        <li><a href="tutors.php">Tutors </a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Help <span
              class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--                                                                                                 fix the # -->
            <li><a href="helpcenter.html">Help Center </a></li>
            <li><a href="QandA.html">Q&A Forums</a></li>
          </ul>
        </li>
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up </a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

    </div>
  </nav>

  <div class="container mt-3">
    <h2> <?php  $tname=$_POST['tname']; echo $tname; ?> Profile </h2>

<?php
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);
else
{
$query = "SELECT * from  tutors where tname='$tname' " ; 
$result = $conn -> query($query);
 if (!$result) die ($conn->error);
   $rows = $result-> num_rows; 
   
$row = $result -> fetch_array(MYSQLI_BOTH); 

}


?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
	<form method="post" >
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
			<img class="rounded-circle mt-5" width="150px" src="img/<?php echo $row['tutorImage']?>">
			<br>
			<span class="text-black-50"> <?php echo $row['temail']?></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-left">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    
					<div class="col-md-12"><label class="labels">Name</label>
					<input type="text" disabled class="form-control" placeholder="first name" 
					value="<?php echo $row['tname'];?>" name="tname"></div>
                  
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label>
					<input type="text" class="form-control" name="tphone" disabled value="<?php echo $row['tphone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label>
					<input type="text" class="form-control" disabled name="taddress" value="<?php echo $row['Address']; ?>"></div>
                
                    <div class="col-md-12"><label class="labels">Nationality</label>
				    <input type="text" class="form-control" disabled name="tcountry" value="<?php echo $row['tcountry']; ?>"></div>
                   
					<div class="col-md-12"><label class="labels">Birth Date</label>
					 <input type="date" class="form-control" id="date"  disabled name="birthDate" value="<?php echo $row['tbirthdate']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Education</label>
					<input type="text" class="form-control" disabled  name="tedu"value="<?php echo $row['teducation']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">City</label>
					<input type="text" class="form-control" disabled name="tcity" value="<?php echo $row['tcity']; ?>"></div>
                     </div>
            
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><h4>Edit Experience</h4></div><br>
                <div class="col-md-12"><label class="labels">Experience </label>
				<textarea class="form-control" placeholder="experience" disabled rows="5" name="experience"><?php echo $row['texperience']; ?></textarea></div> <br>
                <div class="col-md-12"><label class="labels">Years of Experience</label>
				<input type="number" class="form-control" min="1" disabled value="<?php echo $row['yearsOfExperience']; ?>" name="yearsOfExp"></div>
            </div>
        </div>
		</form>
    </div>
</div>
 
</div>
  
</body>





  
</html>
