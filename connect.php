<?php
$fullname= $_POST['fullname']
$username= $_POST['username']
$platform= $_POST['platform']
$evidence= $_POST['evidence']
$age= $_POST['age']
$gender= $_POST['gender']

// database connection
$conn = new mysqli('localhost','root','','test')
if($conn->connect_error){
    die('connection Failed : '.$conn_connect_error);
}else{
    $stmt =conn->prepare("insert into report a case("fullname, username, platform, comment, age, gender)
 values(?,?,?,?,?,?)"")
 $stmt->blind_param("ssssis", $fullname, $username, $platform, $evidence, $age, $gender);
 $stmt->execute();
 echo "Submitted succesfully...";

 $stmt->(close);
 $conn->(close);

 
}  
}

?>