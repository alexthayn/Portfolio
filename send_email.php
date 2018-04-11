
<?php
    $host = "localhost";
    $userName = "alexthay_alex;
    $password = "password";
    $dbName = "alexthayn_alexthay_1";
 
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $fname = .$POST['last_name'];
    $lname = .$POST['first_name'];
    $email = .$POST['email'];
    $message = .$POST['message'];
    
    $insertQuery = $mysqli_prepare("INSERT INTO emails(LastName, FirstName, Email, Message) VALUES (?, ?, ?, ?)");
    $insertQuery->bind_param("ssss", $lname, $fname, $email, $message);
    
}?>