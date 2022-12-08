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


  <div class="jumbotron">
  <h1  class="text-center">Meet the team </h1>
  <h4 class="text-center"> The business leaders of today </h4>
</div>
<br>
  <br><br>
  <br><br>
  
<!--  <div class="container" >
 <h1 class="text-center"> Meet the team </h1>
    <h3 class="text-center">  the business leaders  of today  </h3>
 </div>
  <br>
  <br> -->
  
  
  <div class="container  ">
 <div class="row gy-3">

<?php 
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);

$text = "select * from tutors" ; 
$r = $conn->query($text); 
if (!$r) die ($conn->error); 

$rows = $r -> num_rows ; 




for ($j=0 ; $j < $rows ; $j++)
{
    
    $row = $r->fetch_array(MYSQLI_ASSOC);
    $tname = $row['tname'];
    echo '<div class="col-sm-4  ">
     <div class="card " style="width:300px">
  <img class="card-img-top" src="img/'.$row['tutorImage'].'" alt="Card image"  style="width:300px">
  <div class="card-body text-center">
<h4 class="card-title">'. $row['tname'].' - '.$row['tcity'].'</h4>
    <p class="card-text">'.$row['teducation'].'</p>
    <form method="post" action="viewProfile.php">
    <input type="submit" value="See Profile" class="btn btn-primary">
	<input type="hidden" value="'.$tname.'" name="tname" >
	</form>
  </div>
       
    </div>
    </div>';
    
    
}


$r -> close(); 

?>
 
    



    
  </div>

    


<!--   <h1>meet the teem </h1>
  <h3>the business leaders of today </h3> -->


  </div>

     



   
    


  
</div>
 
  
</div>
</div>


  
<!-- <div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
   -->

<div class="container mt-3">
  <ul class="pagination">
<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="tutors.html">1</a></li>
    <li class="page-item"><a class="page-link" href="tutors2.html">2</a></li>
    <li class="page-item"><a class="page-link" href="tutors2.html">Next</a></li>
  </ul>
</div>

</body>


  
</html>