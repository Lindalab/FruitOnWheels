<?php

$conn=mysqli_connect('localhost','root','','fruitonwheels');
if($conn->connect_error){
    die("Connection Failed ". $conn->connect_error);
}
// else{
//     echo "Connection successfull";
// }
?>