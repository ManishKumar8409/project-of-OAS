<?php
error_reporting(0);
session_start();


$sever ="localhost";
$username ="root";
$passwor = "";
$dbname = "project";

$conn = mysqli_connect($sever,$username,$passwor,$dbname);

if(!$conn){
    echo "not connected";

}

 
    $username = $_POST['username'];
    $password =  $_POST['password'];

  
$_SESSION['username'] = $username;

 

    // Check if the username exists in the database
    $sql = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
     
    $data=mysqli_query($conn,$sql);

    $total=mysqli_num_rows($data);
 
if($total>0){

    header('Location: http://localhost/project/registration.php');
}
else{
    echo "<h1 style= 'color:red'> Page Are Not Found</h1>";
}




 
    
?>