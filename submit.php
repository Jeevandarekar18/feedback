<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "insert into feedback (name, email, message) values ('$name', '$email', '$message')";

if ($conn->query($sql)) {
    echo "Feedback submitted successfully.";
    
} else {
    echo "Error: "; 
}


?>