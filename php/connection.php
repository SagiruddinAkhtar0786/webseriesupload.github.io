<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "dbms";

// create connection

$conn = mysqli_connect($servername,$username,$password,$database);
// echo($conn);
if(!$conn){
    die("connection failed due to this error..".mysqli_connect_error());
}
else{
    // echo "connection successful";
}


?>