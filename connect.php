<?php

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "connection Successful";
}
else { 
        echo "connection Failed";
 }

 mysqli_select_db($con, 'users');

        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $message= $_POST['message'];




$query = "INSERT INTO clients (name, email, phone,message) VALUES ('$name','$email','$phone','$message') ";


mysqli_query($con, $query);
header('location:index.php');

?>


