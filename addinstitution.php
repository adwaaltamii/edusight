<?php
require_once 'config.php' ; 
$conn = new mysqli($hn,$un,$pw,$db); 

if ($conn ->connect_error) die ($conn->connect_error);

$instname = $_POST['instname']; 
$instphone = $_POST['instnum'];
$instemail = $_POST['instemail'];
$instpswd = $_POST['instpswd'];
$insttype = $_POST['insttype'];
echo $instphone . $instemail . $instpswd . $insttype;

//$query = "insert into educationinstitution (instName,instPhone,instEmail,instPwd,instType) values('$instname','$instphone,'$instemail','$instpswd','$insttype')"; 
$query= "insert into educationinstitution values('KSU','011','S@hotmail.com','Riyadh','11523','SA','rIYADH','Univ','123')";
$result = $conn -> query ($query); 
if (!$result) 
// die ($conn->error);
echo "no insert";

else echo 'your record has been added successfully'; 

//$result -> close() ; 
$conn -> close () ; 



?>