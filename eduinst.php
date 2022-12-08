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

<!-- <style>
.body{
  background-color: #17a2b8;
}
.main-row{
  margin-top:10%;
}

.card{
cursor: pointer;er;
}

  .card img{

    transform: translateY(-50px)
    border-raduis: 15px;
    z-index: index 1;;
  }
.card .card body {
  visibility: hidden;
  transform: translateY(-150px)
  hight0px;
}
.card:hover  .card body{
visibility:visible;
transform: translateY(-50)
  transition:.5s;
  height:auto;
}


  
</style> -->







  
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
  <h1  class="text-center" style="font-weight:bold;font-size:36px;">Educational Institutions </h1>
  <h4 class="text-center">  </h4>
</div>
<br>
  <br><br>
  <br><br>
  

  
  
  <div class="container">

  <div class="row gy-3">

<?php 
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);

$text = "select * from educationinstitution" ; 
$r = $conn->query($text); 
if (!$r) die ($conn->error); 

$rows = $r -> num_rows ; 




for ($j=0 ; $j < $rows ; $j++)
{
    
    $row = $r->fetch_array(MYSQLI_ASSOC);
    $iname = $row['instName'];
    echo '<div class="col-sm-4  ">
     <div class="card " style="width:300px">
  <img class="card-img-top" src="img/'.$row['instImage'].'" alt="Card image"  style="width:300px height:200px">
  <div class="card-body text-center">
<h4 class="card-title">'. $row['instName'].' - '.$row['instCity'].'</h4><br>
        <a href="'.$row['instLink'].'"  target="_blank" class="btn btn-primary">See Profile</a>
	
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

    

</body>


  
</html>

    
  



    
  



    
 

    
  




  
