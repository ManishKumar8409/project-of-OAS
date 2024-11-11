<?php

$sever ="localhost";
$username ="root";
$passwor = "";
$dbname = "project";

$con = mysqli_connect($sever,$username,$passwor,$dbname);

if(!$con){
    echo "not connected";

}
// else{
//     echo "connect";
// }

//start

$name = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST ['username'];
 
$password = $_POST['password'];


$sql = "INSERT INTO `user`(`fname`, `lname`, `username`,`password`) VALUES 
('$name', '$lname','$uname','$password')";

$result= mysqli_query($con,$sql);

if($result){
    header('Location: http://localhost/project/login.html');

}else{
    echo "query faild..";
}

?> 