<?php

//to display the errors if any
ini_set('display_errors','1');

// declaring the variables
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

//database connection code

$conn = new mysqli('localhost','root','','test');

if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
    
}else{
    $stmt = $conn->prepare("insert into register (user, email, mobile)
        values(?, ?, ? )");
    $stmt->bind_param("sss",$user, $email, $mobile);
    $stmt->execute();
    echo "registeration successful";
    $stmt->close();
    $conn->close();
}

?>