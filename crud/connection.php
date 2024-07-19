<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form_data";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn){
   // echo "Connected successfully";
} 
else {
    echo "Failed to connect";
}
?>