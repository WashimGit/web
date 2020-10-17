<?php
$server="localhost";
$username="root";
$password="";
$database="users";

$conn=mysqli_connect($server, $username, $password, $database);
if(!$conn){
//     echo "success";
// }
// else{
    die("error 404".mysqli_connect_error());
}
