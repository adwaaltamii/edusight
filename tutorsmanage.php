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
                    <a class="nav-link" href="eduinstmanage.php">Educational Institutions Control Panel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tutorsmanage.php">Tutors Control Panel</a>
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
  <h1  class="text-center">Tutors Control Panel </h1>
  <h4 class="text-center"> The admin only have permission here</h4>
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
 
<?php 
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);

if (isset($_POST['delete']) && isset($_POST['tid']))
{
   
    $t = $_POST['tid']; 
    $q = "delete from tutors where tid=$t"  ;
     $result = $conn -> query($q);
     if (!$result)
		 die  ($conn->error);
	 else
		 echo "<script>alert('Tutor is deleted from the system');</script>";

    
}
$text = "select * from tutors" ; 
$r = $conn->query($text); 
if (!$r) die ($conn->error); 

$rows = $r -> num_rows ; 



echo '<table class="table" >';
echo '<th> Tutor name</th>';
echo '<th> Tutor phone</th>';
echo '<th> Tutor city</th>';
echo '<th> Tutor education</th>';
echo '<th> Tutor picture</th>';


for ($j=0 ; $j < $rows ; $j++)
{
    
    $row = $r->fetch_array(MYSQLI_ASSOC);
    $tid = $row['tid'];
    echo '<tr>';
    echo '<td> ' . $row['tname'] . '</td>';
    echo '<td> ' . $row['tphone'] . '</td>';
    echo '<td> ' . $row['tcity'] . '</td>';
	echo '<td> ' . $row['teducation'] . '</td>';
	echo '<td><img width=200px height=150px src="img/' . $row['tutorImage'] . '"></td>';
    echo 
    '<td>
    <form action="tutorsmanage.php" method="post"> 
    <input type="hidden" name="tid" value="' . $tid . '">  
    <input type="hidden" name="delete" value="yes" > 
    <button type="submit">Delete Tutor</button>
    </form>
    </td>';
    echo '</tr>';
    
    
}
echo '</table>';

$r -> close(); 

?>
</div>




</body>


  
</html>